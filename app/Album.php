<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {
    /* Guarded is a "black list" of Model attributes you do not want to be mass
     * assignable. Since it is empty, every attribute, besides the id, 
     * created_at, and updated_at (which by default are not mass assignable),
     * are open to mass assignment.
     */
    protected $guarded = [];
    
    /**
     * This function modifies the default key used in certain routes. Rather 
     * than keying said routes by an album's id, this function tells Laravel to
     * key said routes by the album's slug.
     * 
     * @return string
     */
    public function getRouteKeyName() {
        return 'slug';
    }
}
