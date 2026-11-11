<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pergunta extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['evento_id', 'texto', 'status', 'user_id', 'is_public'];
=======
    protected $fillable = ['evento_id', 'texto', 'status'];
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795

    public function evento(): BelongsTo
    {
        return $this->belongsTo(Evento::class);
    }
<<<<<<< HEAD

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
=======
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
}
