<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cv;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Promise\index;
use GuzzleHttp\Promise\store;
use App\http\Requests\cvRequest;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CvsController extends Controller


{
   public function __construct()
{$this->middleware('auth');
}

    public function create(){

        return view('cv.Create');
    }
    public function store(cvRequest $request){
//dd($request);
      $CV =new Cv();
      $CV->user_id=Auth::user()->id;
      $CV->titre=$request->input('titre');
      $CV->presentation=$request->input('presentation');
     if($request->hasFile('photo')){
         $CV->photo=$request->file('photo')->store('app');
     }
      $CV->save();
     session()->flash('success','le cv et enregistre!!!!');
    return redirect('/cvs');

    }
    public function index(){
        $cvs= Cv::all();
        return view('cv.index',['cvs'=>$cvs]);
    }
    public function edit($id){
        $cv=Cv::find($id);
        return view('cv.edit',['cv'=>$cv]);

    }
    public function update(cvRequest $request,$id){
        $cv=Cv::find($id);
       $cv->titre= $request->input('titre');
       $cv->presentation= $request->input('presentation');
$cv->save();
return redirect('/cvs');
    }
    public function destroy(Request $request,$id){
        $cv=Cv::find($id);
        $cv->delete();
        return redirect('/cvs');

    }


}
