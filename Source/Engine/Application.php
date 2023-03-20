<?php

namespace Liloi\Exams\Engine;

use Liloi\Exams\API\Tree;

/**
 * @inheritDoc
 */
class Application extends Conceptual
{
    /**
     * @inheritDoc
     */
    public function compile(): string
    {
        // If API requested.
        if(isset($_POST['method']))
        {
            return Tree::execute();
        }

        return $this->render(__DIR__ . '/Layout.tpl', [

        ]);
    }
}