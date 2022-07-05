<?php

namespace agielks\yii2\aws\s3\interfaces;

use agielks\yii2\aws\s3\interfaces\commands\Command;
use agielks\yii2\aws\s3\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package agielks\yii2\aws\s3\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \agielks\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return \agielks\yii2\aws\s3\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
