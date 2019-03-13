<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts_wedding';

    /**
     * @var bool
     */
    public $timestamps = false;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
