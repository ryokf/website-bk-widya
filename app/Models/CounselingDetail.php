<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounselingDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function counseling()
    {
        return $this->belongsTo(Counseling::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
