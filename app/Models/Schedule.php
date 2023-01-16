<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_time', 'end_time', 'days', 'faculty_id', 'laboratory',
    ];

    /**
     * Get the faculty member that owns the schedule.
     */
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    /**
     * Get the laboratory that the schedule belongs to.
     */
    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class);
    }
}
