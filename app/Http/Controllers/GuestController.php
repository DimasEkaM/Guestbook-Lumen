<?php

namespace App\Http\Controllers;
use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $guest = Guest::all();
        return response()->json($guest);
    }

    public function store(Request $request){
        Guest::create($request->all());
        return response()->json(['message' => 'Sukses tambah data']);
    }

    public function show($id){
        $guest = Guest::find($id);
        return response()->json($guest);
    }

    public function update(Request $request, $id){
        $guest = Guest::where('id',$id)->first();
        $guest->name    = $request->input('name');
        $guest->email   = $request->input('email');
        $guest->phone   = $request->input('phone');
        $guest->company = $request->input('company');
        $guest->type    = $request->input('type');
        $guest->palmex  = $request->input('palmex');
        $guest->duo     = $request->input('duo');
        $guest->iko     = $request->input('iko');
        $guest->tpe     = $request->input('tpe');
        $guest->flexideck_seam = $request->input('flexideck_seam');
        $guest->other   = $request->input('other');
        $guest->sales_id = $request->input('sales_id');
        $guest->photo    = $request->input('photo');
        $guest->notes    = $request->input('notes');
        $guest->save();
        return response()->json(['message' => 'Sukses update data']);
    }

    public function delete($id){
        Guest::destroy($id);
        return response()->json(['messsage' => 'sukses delete data']);
    }

}