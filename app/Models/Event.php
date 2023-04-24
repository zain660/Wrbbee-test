<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     * Get all of the comments for the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Workshop(): HasMany
    {
        return $this->hasMany(Workshop::class, 'event_id', 'id');
    }
}
