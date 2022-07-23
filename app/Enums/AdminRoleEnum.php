<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AdminRoleEnum extends Enum
{
    const SUPER_ADMIN =   0;
    const ADMIN       =   1;
}
