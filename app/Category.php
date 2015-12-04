<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function setNameAttribute($name) {

        $this->attributes['name'] = $name;

        $this->makeSlug($name);
    }

    public function makeSlug($name) {
        
        $this->attributes['slug'] = str_slug($name);

        $slug = str_slug($name);

        $latestSlug = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                        ->latest('id')
                        ->pluck('slug');

        if( $latestSlug ) {

            $pieces = explode('-', $latestSlug);

            $number = intval(end($pieces));

            $this->attributes['slug'] = $slug . '-' . ($number + 1);

        }
    }    

    public function packages() {
        return $this->hasMany(Package::class);
    }
}
