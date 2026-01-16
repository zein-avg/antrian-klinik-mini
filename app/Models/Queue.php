<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Queue extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'visit_date',
        'queue_number',
        'complaint',
        'status',
    ];

    protected $casts = [
        'visit_date' => 'date',
    ];

    const STATUS_WAITING = 'WAITING';
    const STATUS_CALLED = 'CALLED';
    const STATUS_DONE = 'DONE';
    const STATUS_CANCELED = 'CANCELED';

    public static function getStatuses(): array
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_CALLED,
            self::STATUS_DONE,
            self::STATUS_CANCELED,
        ];
    }

    /**
     * Get the user that owns the queue.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the doctor that owns the queue.
     */
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    /**
     * Generate next queue number for doctor on specific date.
     */
    public static function generateQueueNumber(int $doctorId, string $date): int
    {
        $lastQueue = self::where('doctor_id', $doctorId)
            ->where('visit_date', $date)
            ->max('queue_number');

        return ($lastQueue ?? 0) + 1;
    }

    /**
     * Check if user already has queue for this doctor on this date.
     */
    public static function userHasQueueForDoctorOnDate(int $userId, int $doctorId, string $date): bool
    {
        return self::where('user_id', $userId)
            ->where('doctor_id', $doctorId)
            ->where('visit_date', $date)
            ->whereIn('status', [self::STATUS_WAITING, self::STATUS_CALLED])
            ->exists();
    }

    /**
     * Check if can be canceled.
     */
    public function canBeCanceled(): bool
    {
        return $this->status === self::STATUS_WAITING;
    }

    /**
     * Get status badge color.
     */
    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            self::STATUS_WAITING => 'yellow',
            self::STATUS_CALLED => 'blue',
            self::STATUS_DONE => 'green',
            self::STATUS_CANCELED => 'red',
            default => 'gray',
        };
    }

    /**
     * Get status display text.
     */
    public function getStatusTextAttribute(): string
    {
        return match($this->status) {
            self::STATUS_WAITING => 'Menunggu',
            self::STATUS_CALLED => 'Dipanggil',
            self::STATUS_DONE => 'Selesai',
            self::STATUS_CANCELED => 'Dibatalkan',
            default => $this->status,
        };
    }
}