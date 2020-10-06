<?php

namespace App\Http\Controllers;
use App\Models\Komen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KomenController extends Controller
{
    public function index (){
        $data = Komen::all();
        return \response($data);
    }

    public function komenItem($id){
        $data = Komen::where('idkomen',$id)->get();
        return \response($data);
    }

    public function setDataKomen(Request $request){
        $data = new Komen;
        $data->komen = $request->input('komen');
        $data->save();
        return 'Success ADD Data Komen';
    }

    public function updateDataKomen(Request $request, $id){
        $data = Komen::where('idkomen',$id)->first();
        $data->komen = $request->input('komen');
        $data->save();

        return 'Success UPDATE Data Komen';
    }

    public function deleteDataKomen(Request $request, $id){
        $data = Komen::where('idkomen',$id)->first();
        $data->delete();
        return 'Success DELETE Data Komen';
    }
}