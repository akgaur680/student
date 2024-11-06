<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    protected $table = 'emails';

    protected $primaryKey = 'id';

    protected $fillable = [
        'student_id',
        'email',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
