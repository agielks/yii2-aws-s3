<?php

namespace agielks\yii2\aws\s3\interfaces;

use agielks\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package agielks\yii2\aws\s3\interfaces
 */
interface Bus
{
    /**
     * @param \agielks\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
