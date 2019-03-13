<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories_wedding';

    /**
     * @var bool
     */
    public $timestamps = false;

}
