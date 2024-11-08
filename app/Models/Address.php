<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $primaryKey = 'id';

    protected $fillable = [
        'student_id',
        'address',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
