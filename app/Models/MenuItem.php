<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    /**
     * Get all of the comments for the MenuItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function MenuChilderen(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'parent_id', 'id');
    }
}
