<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $correo="fcarrillo@frba.utn.edu.ar";

        $validador = Validator::make($request->post(), [
            'asunto'    =>  ['required', 'alpha_dash'],
            'email'     =>  ['required', 'email'],
            'msg'  =>  ['required', 'alpha_dash'],
        ] );

        if($validador->fails()){
            return redirect()->back()->withErrors($validador)->withInput();
        }

        $email = $request->post('email');
        $cuerpo = [
            "asunto" => $request->post('asunto'),
            "msg" => $request->post('msg')
        ];

        Mail::to($email)->send(new ContactMail($cuerpo));

    }


}
