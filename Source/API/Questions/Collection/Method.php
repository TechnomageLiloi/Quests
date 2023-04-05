<?php

namespace Liloi\Exams\API\Questions\Collection;

use Liloi\API\Response;
use Liloi\Exams\API\Method as SuperMethod;
use Liloi\Exams\Engine\Domain\Questions\Manager;
use Liloi\Exams\Engine\Domain\Questions\Types;
use Liloi\Exams\Engine\Domain\Questions\Entity;


class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $collection = Manager::loadCollection();

        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'collection' => $collection
        ]));

        return $response;
    }
}