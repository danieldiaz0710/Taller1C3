<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidacionRequest;


class ConsultaController extends Controller
{
    public function index(){
        $token =csrf_token();
        return $token;
    }

    public function store(ValidacionRequest $request){
        $data =$request->all();
        return $data;
    }
}
