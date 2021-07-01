<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ikan;
use Storage;

class IkanController extends Controller
{
    public function index()
    {
        $ikan= Ikan::all();
        
        return view('ikan.index',compact('ikan'));
    }
    public function create()
    {
        
        return view('ikan.create');
    }
    public function post(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'penjual' => 'required',
            'tanggal' => 'required',
            'image' => 'required'
        ]);

        $gambar = $request->image;
        $new_gambar = time().$gambar->getClientOriginalName();

        $ikan = Ikan::create([
            'nama' => $request->nama,
            'harga' =>  $request->harga,
            'penjual' =>  $request->penjual,
            'tanggal' =>  $request->tanggal,
            'image' => 'public/upload/post/'.$new_gambar
        ]);


        $gambar->move('public/upload/post/', $new_gambar);
        return redirect('/ikan')->with('success','Data Ikan Berhasil Di Tambahkan'); 
    }
    public function edit($id)
    {
        $ikan = Ikan::find($id);
       
        return view('ikan/edit',['ikan' =>$ikan]);
    }
    public function update(Request $request,$id)
    {
    	$ikan = Ikan::findOrFail($id);
        $request->validate([
            'image' => 'required'
            
        ]);

        if (isset($ikan->image)) {
            Storage::delete($ikan->image);
        }
        $image = $request->file('image');
        $new_image = time().$image->getClientOriginalName();

        $ikan->update([
            'image' => 'public/upload/post/'.$new_image,
        ]);

        $image->move('public/upload/post/', $new_image);
        return redirect('/ikan')->with('success', 'Data berhasil diperbaharui');
    }
    public function delete($id)
    {
        $ikan = Ikan::find($id);
        $ikan->delete($ikan);
        return redirect('/ikan')->with('success','Data Ikan Berhasil Di Hapus');
    }
}
