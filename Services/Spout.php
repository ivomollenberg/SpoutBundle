<?php

namespace Stev\SpoutBundle\Services;

use Box\Spout\Common\Type;
use Box\Spout\Reader\Common\Creator\ReaderFactory;
use Box\Spout\Reader\ReaderInterface;
use Box\Spout\Writer\Common\Creator\WriterFactory;
use Box\Spout\Writer\WriterInterface;

class Spout
{
    /**
     *
     * @param string $type
     * @return ReaderInterface
     */
    public function initReader($type = Type::CSV) {
        $reader = ReaderFactory::createFromType($type);

        return $reader;
    }

    /**
     *
     * @param string $type
     * @return WriterInterface
     */
    public function initWriter($type = Type::CSV) {
        $writer = WriterFactory::createFromType($type);

        return $writer;
    }
}
