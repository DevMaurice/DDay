<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    /**
     * Mass Assignable fields
     * 
     * @var Array
     */
    protected $fillable = ['court_name', 'category_id'];

    /**
     * A court will host many Court Hearings.
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hearings()
    {
        return $this->hasMany('App\Hearing');
    }

    /**
     * A court belongs to a category.
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
