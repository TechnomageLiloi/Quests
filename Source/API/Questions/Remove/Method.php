<?php

namespace Liloi\Exams\API\Questions\Remove;

use Liloi\API\Response;
use Liloi\Exams\API\Method as SuperMethod;
use Liloi\Exams\Engine\Domain\Questions\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $key_question = self::getParameter('key_question');
        $entity = Manager::load($key_question);
        $entity->remove();

        return new Response();
    }
}