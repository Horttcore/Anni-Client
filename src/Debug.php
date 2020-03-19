<?php
namespace Anni;

use \Anni\LogFactory;

function Debug(string $channel, string $message = '', array $payload = [])
{
    return \Anni\LogFactory::create('debug', $channel, $message, $payload)->send();
}
