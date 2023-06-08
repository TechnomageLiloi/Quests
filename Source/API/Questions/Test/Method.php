<?php

namespace Liloi\Exams\API\Questions\Test;

use Liloi\API\Response;
use Liloi\Exams\API\Method as SuperMethod;
use Liloi\Exams\Engine\Domain\Questions\Manager;
use Liloi\Exams\Engine\Domain\Questions\Statuses;
use Liloi\Exams\Engine\Domain\Questions\Types;
use Liloi\Exams\Engine\Domain\Questions\Entity;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $key_question = self::getParameter('key_question');
        $entity = Manager::load($key_question);

        $response = new Response();
        $response->set('render', self::renderTest($entity));
        return $response;
    }

    public static function renderTest(Entity $entity): string
    {

        // @todo: encapsulate block at entity
        switch ($entity->getType())
        {
            case Types::CHECK:
                $template = 'Check'; break;
            case Types::RADIO:
                $template = 'Radio'; break;
            case Types::SENTENCE:
                $template = 'Sentence'; break;
            case Types::CARD:
            default: $template = 'Card';
        }

        return static::render(__DIR__ . '/' . $template . '.tpl', [
            'entity' => $entity
        ]);
    }
}