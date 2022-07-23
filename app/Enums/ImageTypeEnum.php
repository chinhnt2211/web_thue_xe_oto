<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ImageTypeEnum extends Enum
{
    const AVATAR =   0;
    const CIC_FRONT =   1;
    const CIC_BACK = 2;
    const VEHICLE = 3;
}
