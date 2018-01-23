<?php

namespace Stev\SpoutBundle\Services;

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
use Box\Spout\Writer\WriterFactory;

/**
 * Description of Spout
 *
 * @author stefan
 */
class Spout {

    public function __construct() {
        
    }

    /**
     * 
     * @param string $type
     * @return \Box\Spout\Reader\ReaderInterface
     */
    public function initReader($type = Type::CSV) {
        $reader = ReaderFactory::create($type);

        return $reader;
    }

    /**
     * 
     * @param string $type
     * @return \Box\Spout\Writer\WriterInterface
     */
    public function initWriter($type = Type::CSV) {
        $writer = WriterFactory::create($type);

        return $writer;
    }

}
