<?php
namespace Anni;

use \Anni\LogFactory;

function Debug(string $channel, string $message = '', array $payload = [], array $options = [])
{
    return \Anni\LogFactory::create('debug', $channel, $message, $payload, $options)->send();
}
