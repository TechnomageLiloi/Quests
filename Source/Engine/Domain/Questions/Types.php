<?php

namespace Liloi\Exams\Engine\Domain\Questions;

class Types
{
    public const CARD = 1;
    public const RADIO = 2;
    public const CHECK = 3;

    public static $list = [
        self::CARD => 'Card',
        self::RADIO => 'Radio',
        self::CHECK => 'Check'
    ];
}