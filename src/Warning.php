<?php
namespace Anni;

use \Anni\LogFactory;

function Warning(string $channel, string $message = '', array $payload = [], array $options = [])
{
    return \Anni\LogFactory::create('warning', $channel, $message, $payload, $options)->send();
}
