<?php
namespace Anni;

use \Anni\LogFactory;

function Info(string $channel, string $message = '', array $payload = [])
{
    return \Anni\LogFactory::create('info', $channel, $message, $payload)->send();
}
