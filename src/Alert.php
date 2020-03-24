<?php
namespace Anni;

use \Anni\LogFactory;

function Alert(string $channel, string $message = '', array $payload = [], array $options = [])
{
    return \Anni\LogFactory::create('alert', $channel, $message, $payload, $options)->send();
}
