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

        $manager->add(new Method('Exams.Questions.Collection', '\Liloi\Exams\API\Questions\Collection\Method::execute'));
        $manager->add(new Method('Exams.Questions.Create', '\Liloi\Exams\API\Questions\Create\Method::execute'));
        $manager->add(new Method('Exams.Questions.Remove', '\Liloi\Exams\API\Questions\Remove\Method::execute'));
        $manager->add(new Method('Exams.Questions.Edit', '\Liloi\Exams\API\Questions\Edit\Method::execute'));
        $manager->add(new Method('Exams.Questions.Save', '\Liloi\Exams\API\Questions\Save\Method::execute'));
        $manager->add(new Method('Exams.Questions.Show', '\Liloi\Exams\API\Questions\Show\Method::execute'));

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