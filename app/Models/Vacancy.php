<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $casts = ['end_date' => 'date'];

    protected $fillable = [
        'title',
        'salary_id',
        'category_id',
        'company_name',
        'end_date',
        'job_description',
        'image',
        'published',
        'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }
}
