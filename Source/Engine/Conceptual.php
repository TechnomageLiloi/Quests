<?php

namespace Liloi\Exams\Engine;

use Liloi\Config\Pool;
use Liloi\Exams\API\Tree;
use Liloi\Exams\Engine\Domain\Manager;
use Rune\Application\Conceptual as ConceptualApplication;

/**
 * @inheritDoc
 */
class Conceptual extends ConceptualApplication
{
    /**
     * Configuration data ppol.
     *
     * @var Pool
     */
    private Pool $config;

    /**
     * Application constructor.
     *
     * @param Pool $config Configuration data object.
     */
    public function __construct(Pool $config)
    {
        $this->config = $config;
        Manager::setConfig($config);
        Tree::collect();
    }

    /**
     * Gets configuration data object.
     *
     * @return Pool Configuration data object.
     */
    public function getConfig(): Pool
    {
        return $this->config;
    }
}