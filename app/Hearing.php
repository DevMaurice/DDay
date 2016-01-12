<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hearing extends Model
{
    /**
     * Database table associated with the model.
     * 
     * @var String
     */
    protected $table = 'cases';

    /**
     * Mass Assignable fields
     * 
     * @var Array
     */
    protected $fillable = ['case_no', 'case_name', 'case_day', 'description'];

    /**
     * A case belongs to a given Category
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * A case will be heard on a given Court
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function court()
    {
        return $this->belongsTo('App\Court');
    }
}
