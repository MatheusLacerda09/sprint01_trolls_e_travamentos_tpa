<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evento extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['titulo', 'descricao', 'data_evento', 'user_id'];
=======
    protected $fillable = ['titulo', 'descricao', 'data_evento'];
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795

    public function perguntas(): HasMany
    {
        return $this->hasMany(Pergunta::class);
    }
}
