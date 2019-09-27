<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product';

    // this makes sure that these are the only columns that could go into the database if mass assignment is done
    // protected $fillable ['column1', 'column2'];

    // this is opposite of above and any columns specified here are not allowed to be mass assigned
    protected $guarded = [];

    public function site() {
        return $this->belogsTo(Site::class);
    }
}