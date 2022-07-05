<?php

namespace agielks\yii2\aws\s3\interfaces;

use agielks\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package agielks\yii2\aws\s3\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \agielks\yii2\aws\s3\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
