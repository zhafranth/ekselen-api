<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller

{
    public function index () {
        $categories = Categories::all();
        return response($categories);
    }

    public function categoriItem($categories){
        $dataCategories = Categories::where('idcategories',$categories)->get();
        return response ($dataCategories);
    }

    public function setDataCategories(Request $request) {
        $data = new Categories;
        $data->name = $request->input('name');
        $data->slug = $slug = Str::slug($request->name, '-');
        $data->save();
        return 'Success add data';
    }

    public function updateDataCategories(Request $request, $id){
        $dataUpdate = Categories::where('idcategories',$id)->first();
        $dataUpdate->name = $request->input('name');
        $dataUpdate->slug = $slug = Str::slug($request->name, '-');
        $dataUpdate->save();
        return 'Berhasil merubah data';
    }
    public function deleteDateCategories($id){
        $dataDel = Categories::where('idcategories',$id)->first();
        $dataDel->delete();

        return 'Data berhasil dihapus';
    }


}
