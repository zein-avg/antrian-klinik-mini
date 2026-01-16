<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'poli_id' => ['required', 'exists:polis,id'],
            'schedule_day' => ['required', 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday'],
            'start_time' => ['required', 'date_format:H:i'],
            'end_time' => ['required', 'date_format:H:i', 'after:start_time'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama dokter harus diisi.',
            'poli_id.required' => 'Poli harus dipilih.',
            'poli_id.exists' => 'Poli tidak valid.',
            'schedule_day.required' => 'Hari jadwal harus dipilih.',
            'schedule_day.in' => 'Hari jadwal tidak valid.',
            'start_time.required' => 'Jam mulai harus diisi.',
            'start_time.date_format' => 'Format jam mulai tidak valid (HH:MM).',
            'end_time.required' => 'Jam selesai harus diisi.',
            'end_time.date_format' => 'Format jam selesai tidak valid (HH:MM).',
            'end_time.after' => 'Jam selesai harus setelah jam mulai.',
        ];
    }
}