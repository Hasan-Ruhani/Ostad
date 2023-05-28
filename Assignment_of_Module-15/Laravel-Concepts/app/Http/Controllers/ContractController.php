<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function invoke(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $massage = $request->get('massage');

        if((!$name) || (!$email) || (!$massage)){
            return "Please fill up all form";
            
        }
        elseif($email != "ostad@gmail.com"){
            return "Please type a recomanded email - for example ostad@gmail.com";
        }

        else{
            return "Your Apply Successfully!! This is Your Emial {$email}";
        }
    }
}
