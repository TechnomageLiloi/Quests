<?php

namespace Liloi\Exams\API\Questions\Save;

use Liloi\API\Response;
use Liloi\Exams\API\Method as SuperMethod;
use Liloi\Exams\Engine\Domain\Questions\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $key_question = self::getParameter('key_question');
        $entity = Manager::load($key_question);

        $entity->setTitle(self::getParameter('title'));
        $entity->setProgram(self::getParameter('program'));
        $entity->setType(self::getParameter('type'));

        $entity->save();

        return new Response();
    }
}