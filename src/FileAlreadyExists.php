<?php

namespace Sargilla\Filesystem;

/**
 * Class FileAlreadyExists.
 *
 * @package Sargilla\Filesystem\Filesystem
 */
class FileAlreadyExists extends \Exception
{
    /**
     * FileAlreadyExists constructor.
     */
    public function __construct()
    {
        parent::__construct('File already exists');
    }
}
