<?php

namespace App\Http\Controllers;
use App\Models\Ukm;
use Illuminate\Http\Request;


class UkmController extends Controller
{
    public function index(){     
        $data=Ukm::all();
        return view('page.infoUKM',['data'=>$data]);
    }
}
