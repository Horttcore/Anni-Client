<?php
namespace Anni;

use \Anni\LogFactory;

function Critical(string $channel, string $message = '', array $payload = [], array $options = [])
{
    return \Anni\LogFactory::create('critical', $channel, $message, $payload, $options, $options)->send();
}
