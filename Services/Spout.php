<?php

namespace Stev\SpoutBundle\Services;

use Box\Spout\Common\Exception\UnsupportedTypeException;
use Box\Spout\Common\Type;
use Box\Spout\Reader\Common\Creator\ReaderFactory;
use Box\Spout\Reader\ReaderInterface;
use Box\Spout\Writer\Common\Creator\WriterFactory;
use Box\Spout\Writer\WriterInterface;

/**
 * Description of Spout
 *
 * @author stefan
 */
class Spout {

    /**
     * @param string $type
     *
     * @return ReaderInterface
     *
     * @throws UnsupportedTypeException
     */
    public function initReader($type = Type::CSV) {
        $reader = ReaderFactory::createFromType($type);

        return $reader;
    }

    /**
     * @param string $type
     *
     * @return WriterInterface
     *
     * @throws UnsupportedTypeException
     */
    public function initWriter($type = Type::CSV) {
        $writer = WriterFactory::createFromType($type);

        return $writer;
    }
}
