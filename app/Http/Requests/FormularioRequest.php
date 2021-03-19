<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'telefone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'escolaridade' => 'required',
            'cargo_desejado' => 'required',
            'arquivo' => 'required|mimes:pdf,doc,docx|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => "É obrigatório informar o nome",
            'nome.min' => "O nome deve conter pelo menos 3 letras",
            'email.required' => "É obrigatório informar o email",
            'email.email' => "O email precisa ser válido",
            'telefone.required' => "É obrigatório informar o telefone",
            'telefone.min' => "Não é telefone válido",
            'telefone.regex' => "Não é telefone válido",
            'escolaridade.required' => "É obrigatório selecionar a escolaridade",
            'cargo_desejado.required' => "É obrigatório informar o cargo desejado",
            'arquivo.required' => "É obrigatório anexar um arquivo com currículo",
            'arquivo.max' => "O tamanho máximo do arquivo é de 1MB",
            'arquivo.mimes' => "Extensão inválida, as extensões permitidas são DOC, DOCX e PDF",
        ];
    }

}
