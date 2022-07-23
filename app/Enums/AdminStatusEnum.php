<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AdminStatusEnum extends Enum
{
    const WORKING =   0;
    const ON_LEAVE =   1;
    const QUIT_JOB = 2;
}
