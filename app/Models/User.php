<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    protected $table = 'tb_users';

    
    protected $primaryKey = 'user_id';

    
    protected $fillable = [
        'user_email',
        'user_password',
        'user_nama',
        'user_alamat',
        'user_hp',
        'user_pos',
        'user_role',
        'user_aktif',
    ];

   
    public $timestamps = true;

    
    protected $hidden = [
        'user_password',
    ];

    
    public function getAuthPassword()
    {
        return $this->user_password;
    }

    
    public function getEmailAttribute()
    {
        return $this->user_email;
    }

    
    public function setEmailAttribute($value)
    {
        $this->attributes['user_email'] = $value;
    }

   
    public function scopeActive($query)
    {
        return $query->where('user_aktif', 'Y');
    }
}
