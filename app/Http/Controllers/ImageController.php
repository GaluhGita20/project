<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){     
        $data=Image::all();
        return view('page.gallery',['data'=>$data]);
    }
}
