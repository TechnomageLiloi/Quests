<?php

namespace Liloi\Exams\API\Questions\Test;

use Liloi\API\Response;
use Liloi\Exams\API\Method as SuperMethod;
use Liloi\Exams\Engine\Domain\Questions\Manager;
use Liloi\Exams\Engine\Domain\Questions\Statuses;
use Liloi\Exams\Engine\Domain\Questions\Types;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $key_question = self::getParameter('key_question');
        $entity = Manager::load($key_question);

        switch ($entity->getType())
        {
            case Types::CARD:
            default: $template = 'Card';
        }

        $response = new Response();

        $response->set('render', static::render(__DIR__ . '/' . $template . '.tpl', [
            'entity' => $entity
        ]));

        return $response;
    }
}