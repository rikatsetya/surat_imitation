<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InboxModel extends Model
{
    use HasFactory;
    protected $table = 'm_inbox';
    protected $fillable = ['surat_id','user_id', 'created_at', 'updated_at'];

    public function user(): BelongsTo{
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }

    public function surat(): BelongsTo{
        return $this->belongsTo(SuratModel::class, 'surat_id', 'surat_id');
    }
}
