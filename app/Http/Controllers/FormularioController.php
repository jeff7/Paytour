<?php

namespace App\Http\Controllers;

use App\Formulario;
use App\Http\Requests\FormularioRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FormularioController extends Controller
{
    //
    public function store(FormularioRequest $request)
    {
        //
        $file = $request->file();
        $fileName = $file['arquivo']->getClientOriginalName();

        $upload = $file['arquivo']->storeAs('arquivos', $fileName);

        if (!$upload) {
            return "Upload não realizado";
        }

        $input = $request->all();
        $input['arquivo'] = $fileName;
        $input['data_hora_envio'] = now()->toDateTimeString('Y-m-d H:i:s');
        $input['ip'] = $request->ip();

        Formulario::create($input);

        Mail::send('Mail.email',['input' => $input], function ($message) use ($file) {
            $message->from('paytour.teste@gmail.com', 'Paytour');
            $message->to('paytour.teste@gmail.com');
            $message->subject('Paytour teste email');
            $message->attach($file['arquivo']);
        });
        
        return redirect('/send');
    }
}
