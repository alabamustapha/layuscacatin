<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Distributor;

class deleteDistributorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $distributor = Distributor::find($this->route('id'));

        return $distributor && $this->user()->role == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
