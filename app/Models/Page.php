<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use TCG\Voyager\Models\Page;

class Page extends Model
{
    public $table = 'page';
    
    protected $guarded = [];

    public function site() {
        $this->belongsTo(Site::class);
    }
}
