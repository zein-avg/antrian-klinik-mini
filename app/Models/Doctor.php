<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'poli_id',
        'schedule_day',
        'start_time',
        'end_time',
    ];

    protected $casts = [
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
    ];

    /**
     * Get the poli that owns the doctor.
     */
    public function poli(): BelongsTo
    {
        return $this->belongsTo(Poli::class);
    }

    /**
     * Get the queues for the doctor.
     */
    public function queues(): HasMany
    {
        return $this->hasMany(Queue::class);
    }

    /**
     * Get queue count for specific date.
     */
    public function getQueueCountForDate(string $date): int
    {
        return $this->queues()
            ->where('visit_date', $date)
            ->whereIn('status', ['WAITING', 'CALLED'])
            ->count();
    }

    /**
     * Check if doctor is available on specific date.
     */
    public function isAvailableOnDate(string $date): bool
    {
        $dayOfWeek = \Carbon\Carbon::parse($date)->format('l');
        return $this->schedule_day === $dayOfWeek;
    }
}