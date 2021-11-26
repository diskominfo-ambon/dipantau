<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description' => 'required|min:20',
            'marker_point_id' => 'required|numeric',
            'categories' => 'required|array|min:1',
            'categories.*' => 'required|numeric',
            'files' => 'required|array|min:1',
            'files.*' => 'required|numeric'
        ];
    }


    public function attributes()
    {
        return [
            'description' => 'Deskripsi pesan',
            'marker_point_id' => 'Lokasi pemantuan',
            'categories' => 'Kategori',
            'files' => 'Berkas'
        ];
    }

    public function validationData()
    {
        return $this->only([
            'description',
            'marker_point_id'
        ]);
    }
}
