<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $id
 */
class Card extends Model
{
    use HasFactory;

    protected $table = "cards";

    protected $fillable = [
        'name',
        'user_id',
    ];

    public function words(): HasMany
    {
        return $this->hasMany(Word::class, 'card_id', 'id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
