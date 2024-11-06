<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'father_name',
        'dob',
        'class',
        'stream',
    ];

    public function address()
    {
        return $this->hasmany(Address::class);
    }

    public function emails()
    {
        return $this->hasmany(Emails::class);
    }
}
