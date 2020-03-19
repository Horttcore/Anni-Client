<?php
namespace Anni;

use \Anni\LogFactory;

function Notice(string $channel, string $message = '', array $payload = [])
{
    return \Anni\LogFactory::create('notice', $channel, $message, $payload)->send();
}
