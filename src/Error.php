<?php
namespace Anni;

use \Anni\LogFactory;

function Error(string $channel, string $message = '', array $payload = [])
{
    return \Anni\LogFactory::create('error', $channel, $message, $payload)->send();
}
