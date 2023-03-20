<?php

namespace Liloi\Exams\Engine\Domain\Questions;

class Statuses
{
    public const TODO = 1;
    public const COMPOSING = 2;
    public const ACTIVE = 3;
    public const SUCCESS = 4;
    public const FAILURE = 5;

    public static $list = [
        self::TODO => 'To Do',
        self::COMPOSING => 'Composing',
        self::ACTIVE => 'Active',
        self::SUCCESS => 'Success',
        self::FAILURE => 'Failure'
    ];
}