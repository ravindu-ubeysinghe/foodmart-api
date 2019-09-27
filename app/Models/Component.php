<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    public $table = "components";

    protected $guarded = [];

    public function site() {
        $this->belongsTo(Site::class);
    }
}
