<?php

namespace App\Http\Controllers;
use App\Models\Kupon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KuponController extends Controller

{
    public function index (){
        $kupon = Kupon::all();
        return \response($kupon);
    }

    public function kuponItem ($id){
        $dataKupon = Kupon::where('idkupon',$id)->get();
        return \response($dataKupon);
    }

    public function setDataKupon(Request $request){
        $newData = new Kupon;
        $newData->name = $request->input('name');
        $newData->save();
        return 'Success add data kupon';
    }

    public function updateDataKupon(Request $request, $id){
        $dataUpdate = Kupon::where('idKupon',$id)->first();
        $dataUpdate->name = $request->input('name');
        $dataUpdate->save();
        return 'Success Update Data Kupon';
    }

    public function deleteDataKupon($id){
        $dataDelete = Kupon::where('idkupon',$id)->first();
        $dataDelete->delete();

        return 'Success Delete Data Kupon';
    }
}