<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class VehicleStatusEnum extends Enum
{
    const UNKNOWN =   0;
    const NEW =   1;
    const OLD = 2;
    // const ELIMINATED = 3;
}
