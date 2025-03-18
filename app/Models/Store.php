<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'address', 'image', 'phone_number', 'admin_id'
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
