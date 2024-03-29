<?php

namespace App\Http\Controllers\ContactControllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    public function handleContact(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        dd([$name, $email, $message]);
    }
}
