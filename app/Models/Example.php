<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Example extends Model
{
    use HasFactory;

    protected $table = 'examples';

    protected $fillable = [
        'text',
        'word_id',
    ];

    public function word(): BelongsTo
    {
        return $this->belongsTo(Word::class, 'word_id', 'id');
    }
}
