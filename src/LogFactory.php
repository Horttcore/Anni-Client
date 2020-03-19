<?php
namespace Anni;

use \Anni\Log;

/**
 * Class PluginFactory
 *
 * @since   1.0.0
 *
 * @package RalfHortt\Plugin
 * @author  Ralf Hortt <me@horttcore.de>
 */
class LogFactory
{
    /**
     * Create and return an instance of the plugin.
     *
     * @since 1.0.0
     * @return Plugin Plugin instance.
     */
    public static function create(string $level, string $channel, string $message = '', array $payload = []): Log
    {
        return (new Log())->level($level)
            ->channel($channel)
            ->message($message)
            ->payload($payload);
    }
}
