<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn($word) => Str::substr($word, 0, 1))
            ->implode('');
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isSupplier()
    {
        return $this->role === 'supplier';
    }

    public function isCustomer()
    {
        return $this->role === 'customer';
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function aiDesigns()
    {
        return $this->hasMany(AiDesign::class);
    }

    public function furnitureFindings()
    {
        return $this->hasMany(FurnitureFinding::class);
    }
    public function furniture()
    {
        return $this->hasMany(Furniture::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
