<?php
namespace Anni;

use \Anni\LogFactory;

function Alert(string $channel, string $message = '', array $payload = [])
{
    return \Anni\LogFactory::create('alert', $channel, $message, $payload)->send();
}
