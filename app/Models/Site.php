<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $guarded = [];

    public function getTitleAttribute()
    {
        $field = 'title_'.app()->getLocale() ?? 'ua';
        return $this->$field;
    }

    public function getPreviewAttribute()
    {
        $field = 'preview_'.app()->getLocale() ?? 'ua';
        return $this->$field;
    }

    public function getTextAttribute()
    {
        $field = 'text_'.app()->getLocale() ?? 'ua';
        return $this->$field;
    }

    public function images()
    {
        return $this->hasMany(Image::class,'record_id')->where('type','site')->orderBy('order','asc');
    }

    public static function changeOrder($order)
    {
        $i = 1;
        foreach ($order as $item) {
            $record = Site::find($item['id']);
            $record->order = $i;
            $record->save();
            $i++;
        }
    }

}
