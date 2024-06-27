<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    /**
     * Get all of the counselingDetail for the Counseling
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function counselingDetail()
    {
        return $this->hasMany(CounselingDetail::class, 'counseling_id', 'id');
    }

    /**
     * Get the user that owns the Counseling
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
