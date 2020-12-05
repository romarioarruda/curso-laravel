<?php

namespace laraDev\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        echo "Index user";
    }

    public function postData(Request $request)
    {
        echo('<pre>');
        print_r($request->email);
        echo('</pre>');
        exit('Parando execução do software.');
    }

    public function putData(Request $request)
    {
        echo('<pre>');
        print_r($_REQUEST);
        echo('</pre>');
        exit('Parando execução do software.');
    }
}
