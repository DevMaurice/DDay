<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Mass Assignable fields.
     * 
     * @var Array.
     */
    protected $fillable = ['name', 'type'];

    /**
     * A category has many Hearings.
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hearings()
    {
        if ($this->type = 1) {
            return $this->hasMany('App\Hearing');
        }
    }

     /**
     * A category has many Court.
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courts()
    {
        if ($this->type = 2) {
            return $this->hasMany('App\Court');
        }
    }
}
