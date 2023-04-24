<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    /**
     * Get the Events associated with the Workshop
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Events(): HasOne
    {
        return $this->hasOne(Event::class, 'id', 'event_id');
    }
}
