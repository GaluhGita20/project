<?php

namespace App\Http\Controllers;
use App\Models\Fakultas;
use Illuminate\Http\Request;


class FakultasController extends Controller
{
    public function __construct()
    {
        $this->Fakultas = new Fakultas();
    }
    
    public function index(){
        $data=Fakultas::all();
        return view('page.infoFakultas',['data'=>$data]);
    }
}
