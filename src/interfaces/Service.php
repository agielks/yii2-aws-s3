<?php

namespace agielks\yii2\aws\s3\interfaces;

use agielks\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Service
 *
 * @package agielks\yii2\aws\s3\interfaces
 */
interface Service
{
    /**
     * @param \agielks\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);

    /**
     * @param string $commandClass
     *
     * @return \agielks\yii2\aws\s3\interfaces\commands\Command
     */
    public function create(string $commandClass): Command;
}
