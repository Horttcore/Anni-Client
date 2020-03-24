<?php
namespace Anni;

use \Anni\Connect;

class Log
{
    protected $level;

    protected $validLevels = ['debug','info','notice','warning','error','critical','alert','emergency'];

    protected $channel = 'Default';

    protected $message = null;

    protected $payload = [];

    protected $reponse = false;

    protected $throttle = 0;

    public function level(string $level): Log
    {
        if (!in_array($level, $this->validLevels)) {
            throw new \InvalidArgumentException(\sprintf('Invalid level value. Level should be one of the following level: %s', implode(', ', $this->validLevels)));
        }

        $this->level = $level;

        return $this;
    }

    public function channel(string $channel): Log
    {
        $this->channel = $channel;

        return $this;
    }

    public function message(string $message): Log
    {
        $this->message = $message;

        return $this;
    }

    public function payload(array $payload): Log
    {
        $this->payload = $payload;

        return $this;
    }

    public function throttle(int $throttle): Log
    {
        $this->throttle = $throttle;

        return $this;
    }

    public function send()
    {
        $connection = Connect::getInstance();

        if (!$connection->isOpen()) {
            throw new \Exception('Missing connection data for \Anni\Connect');
        }

        if (!$this->channel || !$this->message) {
            throw new \Exception('Nothing to log');
        }

        $this->post();

        return $this->response();
    }

    protected function response()
    {
    }

    protected function post(): ?\stdClass
    {
        $connection = Connect::getInstance();

        $url = $connection->getConnection();

        $data = $this->getData();

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context  = stream_context_create($options);

        $this->response = json_decode(file_get_contents($url, false, $context));

        return $this->response;

        // if ($this->response === false) { /* Handle error */
        // }
    }

    protected function getData(): array
    {
        return [
            'level' => $this->getLevel(),
            'channel' => $this->getChannel(),
            'message' => $this->getMessage(),
            'payload' => $this->getPayload(false),
            'throttle' => $this->getThrottle(),
        ];
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getPayload($raw = true): string
    {
        if (empty($this->payload)) {
            return '';
        }

        return ($raw) ? $this->payload : json_encode($this->payload);
    }

    public function getThrottle(): int
    {
        return $this->throttle;
    }
}
