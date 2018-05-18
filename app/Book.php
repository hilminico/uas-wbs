<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = "id";
    protected $fillable = [
        'id','name', 'judul','pengarang','penerbit','created_at','updated_at'
    ];
}
