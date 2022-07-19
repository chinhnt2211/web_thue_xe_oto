<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class GenderEnum extends Enum
{
    const MALE =   0;
    const FEMALE =   1;
    const OTHERS = 2;
}
