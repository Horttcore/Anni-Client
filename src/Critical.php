<?php
namespace Anni;

use \Anni\LogFactory;

function Critical(string $channel, string $message = '', array $payload = [])
{
    return \Anni\LogFactory::create('critical', $channel, $message, $payload)->send();
}
