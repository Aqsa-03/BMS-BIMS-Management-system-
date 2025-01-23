<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssignmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'class_course_id' => 'required',
            'course_id' => 'required',
            'title' => 'required',
            'description' => 'sometimes',
            'due_date_time' => 'required',
            'file' => 'file | sometimes | mimes:pdf,doc,docx|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'course_id.required' => 'Please Select a Course',
            'class_course_id.required' => 'Please Select a Class',
            'title.required' => 'Please Enter a Title',
            'due_date_time.required' => 'Please Select Due Date & Time',
        ];
    }
}
