<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackSubject extends Model
{
    protected $fillable = [
        'feedbackSubject', 'feedbackDescription'
    ];
}
