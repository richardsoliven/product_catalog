<?php

namespace Module\Core\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = "user";

    /**
     * Assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'description',
        'email',
        'slug',
        'image'
    ];
}
