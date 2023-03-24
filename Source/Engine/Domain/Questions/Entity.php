<?php

namespace Liloi\Exams\Engine\Domain\Questions;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * @method string getTitle()
 * @method void setTitle(string $value)
 *
 * @method string getStatus()
 * @method void setStatus(string $value)
 *
 * @method string getType()
 * @method void setType(string $value)
 *
 * @method string getProgram()
 * @method void setProgram(string $value)
 *
 * @method string getTheory()
 * @method void setTheory(string $value)
 *
 * @method string getTags()
 * @method void setTags(string $value)
 *
 * @method string getDt()
 * @method void setDt(string $value)
 *
 * @method string getData()
 * @method void setData(string $value)

 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_question');
    }

    public function getStatusTitle(): string
    {
        return Statuses::$list[$this->getStatus()];
    }

    public function getStatusClass(): string
    {
        // @todo: string to class
        $status = strtolower($this->getStatusCaption());
        return str_replace(' ', '-', $status);
    }

    public function getParse(): string
    {
        return Parser::parseString($this->getProgram());
    }

    public function save(): void
    {
        Manager::save($this);
    }

    public function remove(): void
    {
        $this->setStatus(Statuses::OBSOLETE);
        $this->save();
    }
}