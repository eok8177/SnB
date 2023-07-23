<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Page extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getHtmlAttribute()
    {
        preg_match_all("/\[([^\]]*)\]/", $this->text, $matches);

        if (!$matches[1]) return false;

        foreach ($matches[1] as $item) {
            $block = Block::where('slug',$item)->firstOrFail();
            $find[] = '['.$item.']';
            $replace[] = $block->html;
        }

        return str_replace($find, $replace, $this->text);
    }

}
