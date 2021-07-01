<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ikan;

class HomeController extends Controller
{
   public function index()
   {
   		$ikan = Ikan::all();
   		return view('home.index',compact('ikan'));
   }
   public function detail($id)
   {
   		$ikan = Ikan::find($id);

   		return view('home.detail',compact('ikan'));
   }
}
