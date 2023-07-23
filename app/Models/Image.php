<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public static function changeOrder($order)
    {
        $i = 1;
        foreach ($order as $item) {
            $record = Image::find($item['id']);
            $record->order = $i;
            $record->save();
            $i++;
        }
    }

    public static function uploadImages($images, $record_id, $type)
    {
        foreach ($images as $file) {
                
            $image = Image::create([
                'record_id' => $record_id,
                'type' => $type,
            ]);
            $image->url = $file->storeAs("images/{$type}/$record_id", $image->id.'_'.$file->getClientOriginalName(), 'public');
            $image->save();
        }
    }

}
