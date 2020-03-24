<?php
namespace Anni;

use \Anni\LogFactory;

function Info(string $channel, string $message = '', array $payload = [], array $options = [])
{
    return \Anni\LogFactory::create('info', $channel, $message, $payload, $options)->send();
}
