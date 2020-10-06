<?php

namespace App\Http\Controllers;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illumintae\Support\Str;

class RatingController extends Controller
{
    public function index(){
        $rating = Rating::all();
        return \response($rating);
    }

    public function ratingItem($id){
        $ratingItem = Rating::where('idrating',$id)->first();
        return \response($ratingItem);
    }

    public function setDataRating(Request $request){
        $newData = new Rating;
        $newData->rating = $request->input('rating');
        $newData->save();
        return 'Success Add Data Rating';
    }

    public function updateDataRating(Request $request, $id){
        $updateData = Rating::where('idrating',$id)->first();
        $updateData->rating = $request->input('rating');
        $updateData->save();
        return 'Success Update Data Rating';
    }

    public function deleteDataRating(Request $request, $id){
        $deletData = Rating::where('idrating',$id)->first();
        $deletData->delete();

        return 'Success Delete Data Rating';
    }
}