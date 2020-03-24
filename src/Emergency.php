<?php
namespace Anni;

use \Anni\LogFactory;

function Emergency(string $channel, string $message = '', array $payload = [], array $options = [])
{
    return \Anni\LogFactory::create('emergency', $channel, $message, $payload, $options)->send();
}
