<?php

declare(strict_types=1);

namespace App\User\Infrastructure\EloquentModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

final class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /** @var array */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /** @var array */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**  @var array */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
