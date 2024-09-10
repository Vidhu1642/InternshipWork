<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'enrollment_number',
        'parent_name',
        'parent_email',
        'parent_phone',
    ];
    use HasFactory;
}


