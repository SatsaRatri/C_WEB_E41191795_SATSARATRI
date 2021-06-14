<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProfileController extends Controller
{
  public function index(){
      return "Hallo";
  }
  public function create(){
      return "Create";
  }
  public function store(Request $request){
      return "Menciptakan User Baru";
  }
  public function show($id){
    return "Mengambil Satu Data User" .$id;
  }
  public function edit($id){
    return "Mengubah Satu Data User" .$id;
  }
  public function update(Request $request, $id){
    return "Mengubah Data User Dengan id" . $id;
  }
  public function destroy($id){
    return "Menghapus Data Dengan id" .$id;
  }
  public function biodata(){

    $nama = "Satsa Ratri";
    $pelajaran = ["ALgoritma & Pemograman", "Kalkulus", "Pemograman Web"];
    return view('home', compact('nama', 'pelajaran'));
  }
}
