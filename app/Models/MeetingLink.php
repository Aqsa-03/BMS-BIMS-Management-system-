<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingLink extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','date_time','teacher_id','course_id','class_course_id','link'];

    public function classCourse()
    {
        return $this->belongsTo(ClassCourse::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
