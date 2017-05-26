<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
  public function index(){
    $siswa = Siswa::all();
    return view('index', compact('siswa'));
  }
	public function create(){
      return view('create');
    }
 
 
    public function store(Request $request){
      siswa::create([
        'id'=>$request->id,
        'nama'=>$request->nama,
        'jurusan'=>$request->jurusan,
      ]);
      return redirect()->back();
    }

    public function edit($id){
      $sis = Siswa::find($id);
      return view('edit',compact('sis'));
    }
    public function update(Request $request){
      $sis = Siswa::find($request ->id);
      $sis->nama=$request->nama;
      $sis->jurusan =$request->jurusan;

      $sis->save();
      return redirect('/show');
      // $updated=$sis->save();
      // if($updated){
      //   return redirect()->with('massage','Post Successfully Updated');
      // }
    }
    public function delete($id){
      $sis = Siswa::find($id);
      $sis->delete();
      return redirect('/show');
    }
}
