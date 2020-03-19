<?php
namespace Anni;

use \Anni\LogFactory;

function Warning(string $channel, string $message = '', array $payload = [])
{
    return \Anni\LogFactory::create('warning', $channel, $message, $payload)->send();
}
