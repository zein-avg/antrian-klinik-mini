<?php

namespace App\Http\Requests;

use App\Models\Doctor;
use App\Models\Queue;
use Illuminate\Foundation\Http\FormRequest;

class StoreQueueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !$this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'doctor_id' => ['required', 'exists:doctors,id'],
            'visit_date' => ['required', 'date', 'after_or_equal:today'],
            'complaint' => ['required', 'string', 'min:10', 'max:1000'],
        ];
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            // Check if doctor is available on selected date
            $doctor = Doctor::find($this->doctor_id);
            if ($doctor && !$doctor->isAvailableOnDate($this->visit_date)) {
                $validator->errors()->add(
                    'visit_date',
                    'Dokter tidak praktik pada tanggal yang dipilih.'
                );
            }

            // Check if queue is full (max 20)
            if ($doctor && $doctor->getQueueCountForDate($this->visit_date) >= 20) {
                $validator->errors()->add(
                    'doctor_id',
                    'Antrian dokter pada tanggal tersebut sudah penuh (maksimal 20 pasien).'
                );
            }

            // Check if user already has queue for this doctor on this date
            if (Queue::userHasQueueForDoctorOnDate(
                $this->user()->id,
                $this->doctor_id,
                $this->visit_date
            )) {
                $validator->errors()->add(
                    'doctor_id',
                    'Anda sudah terdaftar untuk dokter ini pada tanggal yang sama.'
                );
            }
        });
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'doctor_id.required' => 'Dokter harus dipilih.',
            'doctor_id.exists' => 'Dokter tidak valid.',
            'visit_date.required' => 'Tanggal kunjungan harus diisi.',
            'visit_date.date' => 'Format tanggal tidak valid.',
            'visit_date.after_or_equal' => 'Tanggal kunjungan tidak boleh kurang dari hari ini.',
            'complaint.required' => 'Keluhan harus diisi.',
            'complaint.min' => 'Keluhan minimal 10 karakter.',
            'complaint.max' => 'Keluhan maksimal 1000 karakter.',
        ];
    }
}