<?php

namespace App\Models;

use App\Enums\ImageTypeEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Image extends Model
{
    use HasFactory;

    public $fillable = [
        'type',
        'link',
    ];

    protected $visible = [
        'id',
        'type',
        'link',
    ];

    public static function create($file, $type)
    {
        $model = new self;
        $model->type = ImageTypeEnum::getValue(Str::upper($type));
        $model->link = $file->store('images/');
        $model->save();
        return $model->id;
    }
}
