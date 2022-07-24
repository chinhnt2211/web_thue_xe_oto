<?php

namespace App\Models;

use App\Enums\ImageTypeEnum;
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

    public static function create($file, $type)
    {
        $model = new self;
        $model->type = ImageTypeEnum::getValue(Str::upper($type));
        
        do {
            $name = Hash::make(time()).'.'.$file->extension();
        } while(Storage::exists('images/'.$name));

        $model->link = $file->storeAs('images/', $name);
        $model->save();
        return $model->id;
    }
}
