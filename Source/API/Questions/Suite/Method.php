<?php

namespace Liloi\Exams\API\Questions\Suite;

use Liloi\API\Response;
use Liloi\Exams\API\Method as SuperMethod;
use Liloi\Exams\Engine\Domain\Questions\Manager;
use Liloi\Exams\API\Questions\Test\Method as TestMethod;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $tags = self::getParameter('tags');
        $collection = Manager::loadByTags($tags);

        foreach($collection as $entity)
        {

        }

        $response = new Response();

        $response->set('render', static::render(__DIR__ . '/' . $template . '.tpl', [
            'entity' => $entity
        ]));

        return $response;
    }
}