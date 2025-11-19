<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;   // ⬅️ TAMBAH
use Filament\Panel;                           // ⬅️ TAMBAH
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser   // ⬅️ IMPLEMENT FilamentUser
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
        'password',
        'panel_id',   // ⬅️ TAMBAH
        'is_active',  // ⬅️ TAMBAH
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
            'is_active' => 'boolean',   // ⬅️ TAMBAH
        ];
    }

    /**
     * INI YANG NENTUKAN USER BOLEH MASUK PANEL MANA.
     * 1 user = 1 panel (via panel_id).
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_active
            && $this->panel_id !== null
            && $this->panel_id === $panel->getId();
    }
}
