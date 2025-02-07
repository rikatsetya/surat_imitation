<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserModel extends Model
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    use HasFactory;
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = ['username', 'name', 'email', 'password','created_at', 'updated_at'];

    protected $hiidden = ['password'];

    protected $casts = ['password' => 'hashed'];
    
    public function surat(): HasMany{
        return $this->hasMany(SuratModel::class, 'user_id', 'user_id');
    }
    public function inbox(): HasMany{
        return $this->hasMany(InboxModel::class, 'user_id', 'user_id');
    }
}
