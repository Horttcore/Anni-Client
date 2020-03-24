<?php
namespace Anni;

use \Anni\LogFactory;

function Error(string $channel, string $message = '', array $payload = [], array $options = [])
{
    return \Anni\LogFactory::create('error', $channel, $message, $payload, $options)->send();
}
