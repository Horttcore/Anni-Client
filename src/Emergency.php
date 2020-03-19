<?php
namespace Anni;

use \Anni\LogFactory;

function Emergency(string $channel, string $message = '', array $payload = [])
{
    return \Anni\LogFactory::create('emergency', $channel, $message, $payload)->send();
}
