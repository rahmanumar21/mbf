<?php

namespace Botble\Media\Storage\BunnyCDN\Exceptions;

use Exception;

/**
 * An exception thrown by BunnyCDNStorage caused by authentication failure
 */
class BunnyCDNStorageFileNotFoundException extends BunnyCDNStorageException
{
    /**
     * @param string $path
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($path, $code = 0, Exception $previous = null)
    {
        parent::__construct('Could not find part of the object path: ' . $path, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ': ' . $this->message . "\n";
    }
}
