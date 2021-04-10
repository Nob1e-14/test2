<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
    //
    public function index()
    {
        return view('captcha');
    }

    public function capthcaFormValidate(Request $request)
    {
        
    $rules = ['captcha' => 'required|captcha_api:'. request('key') . ',default'];
    $validator = validator()->make(request()->all(), $rules);
    if ($validator->fails()) {
        return redirect()->back()->with('alert', 'Captcha Incorrecto!');
        }else{
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'captcha' => 'required|captcha'
        ]);
        return redirect()->back()->with('status', 'Registro Exitoso!');
        }
        
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
