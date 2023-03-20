<?php

namespace Liloi\Exams\API;

use Liloi\API\Manager;
use Liloi\API\Method;

/**
 * @inheritDoc
 */
class Tree
{
    /**
     * @var Manager|null
     */
    static ?Manager $manager = null;

    /**
     * Collects API methods.
     */
    public static function collect(): void
    {
        $manager = new Manager();

        self::$manager = $manager;
    }

    /**
     * Execute API method.
     *
     * @return string
     * @throws \Liloi\API\Errors\NotFoundException
     */
    public static function execute(): string
    {
        $response = self::$manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->asJson();
    }
}