<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $id
 * @property mixed $text
 */
class Word extends Model
{
    use HasFactory;

    protected $table = "words";

    protected $fillable = [
        'value',
        'transcript',
        'translate',
        'card_id',
        'status',
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class, 'card_id', 'id');
    }

    public function examples(): HasMany
    {
        return $this->hasMany(Example::class, 'word_id', 'id');
    }
}
