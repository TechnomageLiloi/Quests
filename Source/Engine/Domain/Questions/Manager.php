<?php

namespace Liloi\Exams\Engine\Domain\Questions;

use Liloi\API\Errors\Exception;
use Liloi\Blueprint\Engine\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'questions';
    }

    public static function load(string $key_question): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_question="%s"',
            $name,
            $key_question
        ));

        return Entity::create($row);
    }

    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();

        // @todo: Get param name from const.
        $key = $data['key_question'];
        unset($data['key_question']);

        self::getAdapter()->update(
            $name,
            $data,
            sprintf('key_question = "%s"', $key)
        );
    }

    public static function remove(Entity $entity): void
    {
        $name = self::getTableName();
        $key = $entity->getKey();

        self::getAdapter()->delete(
            $name,
            sprintf('key_question = "%s"', $key)
        );
    }

    // @todo: rise this method to more abstract level.
    public static function create(): array
    {
        $name = self::getTableName();
        $data = [
            'title' => 'Enter the title',
            'status' => '1',
            'type' => '1',
            'program' => '// comment',
            'hint' => '// comment',
            'tags' => '// comment',
            'dt' => date('Y-m-d H:i:s'),
            'data' => '{}'
        ];
        self::getAdapter()->insert($name, $data);

        return $data;
    }
}