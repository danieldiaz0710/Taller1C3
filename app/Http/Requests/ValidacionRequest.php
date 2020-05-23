<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'cedula' =>'integer|numeric|nullable',
            'NomCompletos'=>'required|alpha|min:5|max:150',
            'ApeCompletos'=>'required|alpha|min:5|max:150',
            'telefono' => 'integer|numeric|nullable',
            'email'=>'required|email:rfc'

        ];
    }

    public function attributes()
    {
        return [
            'cedula' =>'Numero de Identificacion',
            'NomCompletos'=>'Nombres Completos',
            'ApeCompletos'=>'Apellidos Completos',
            'telefono' =>'telefono',
            'email'=>'Correo Electronico'
                                  
        ];
    }
    public function messages()
    {
        return[
            'cedula.integer' => 'El :attribute es requerido',
            'cedula.numeric' => 'El :attribute debe contener solo numeros',

            'NomCompletos.required' => 'Los :attribute es requerido ',
            'NomCompletos.alpha' =>'los :attribute deben ser solo letras',
            'NomCompletos.min' => 'Los :attribute deben contener por lo menos 5 caracteres',
            'NomCompletos.max' =>'Los :attribute deben contener al menos 5 caracteres',

            'ApeCompletos.required' => 'Los :attribute tiene que ingresarlos ',
            
            'ApeCompletos.alpha' =>'Los :attribute deben ser solo letras',
            'ApeCompletos.min' => 'Los :attribute deben contener por lo menos 5 caracteres',
            'ApeCompletos.max' =>'Los :attribute deben ingresar al menos 5 caracteres',
            'telefono.integer' => 'El :attribute solo acepta numeros',
            'telefono.numeric' => 'El :attribute debe contener caracteres numericos',
            'email.required' => 'El attribute es requerido',
            'email.email' =>'El :attribute tiene formato erroneo',
            'email.unique' => 'El :attribute ya existe'
        ];
    }
}
