<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function job()
    {
        return $this->belongsTo(TutorJob::class, 'id');
    }
}
