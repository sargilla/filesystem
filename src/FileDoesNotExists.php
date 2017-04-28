<?php

namespace Sargilla\Filesystem;

/**
 * Class FileDoesNotExists.
 *
 * @package Sargilla\FlatLab\Filesystem
 */
class FileDoesNotExists extends \Exception
{
    /**
     * FileDoesNotExists constructor.
     */
    public function __construct()
    {
        parent::__construct('File does not exists');
    }
}
