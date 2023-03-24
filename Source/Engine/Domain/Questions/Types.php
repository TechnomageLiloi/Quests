<?php

namespace Liloi\Exams\Engine\Domain\Questions;

class Types
{
    public const CARD = 1;
    public const RADIO = 2;

    public static $list = [
        self::CARD => 'Card',
        self::RADIO => 'Radio'
    ];
}