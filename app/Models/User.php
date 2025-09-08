<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi: User punya banyak produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Relasi: User punya banyak artikel
    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }
}
