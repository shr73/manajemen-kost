<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;
class GedungController extends Controller
{
    //
    public function index(){
        $data = Gedung::all();
        return view('gedung.index', ['dataGedung'=> $data]);
    }
    public function create(){
        return view('gedung.create');
    }
    public function store(Request $request){
        $data = new Gedung();
        $data->id = $request->id;
        $data->nama_gedung = $request->nama_gedung;
        $data->save();
        return redirect()->route('gedung.index');
    }
    public function edit($id){
        $data = Gedung::find($id);
        return view('gedung.edit', compact('data'));
    }
    public function update(Request $request, $id){
        $data = Gedung::find($id);
        $data->nama_gedung = $request->nama_gedung;
        $data->update();
        return redirect()->route('gedung.index');
    }
    public function delete($id){
        $data = Gedung::find($id);
        $data->delete();
    }
}
