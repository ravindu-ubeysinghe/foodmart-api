<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $table = 'site';
    protected $fillable = ['id', 'domain', 'category'];

    // public function products() {
    //     return $this->hasMany('App\Models\Product', 'domain', 'domain');
    // }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function components() {
        return $this->hasMany(Component::class);
    }

    public function pages() {
        return $this->hasMany(Page::class);
    }

    public static function getSiteByDomain($domain) {
        if ($domain) {
            return Site::where('domain', $domain)->first() ?: null;
        }

        return null;
    }
}
