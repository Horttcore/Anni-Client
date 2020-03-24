<?php
namespace Anni;

use \Anni\LogFactory;

function Notice(string $channel, string $message = '', array $payload = [], array $options = [])
{
    return \Anni\LogFactory::create('notice', $channel, $message, $payload, $options)->send();
}
