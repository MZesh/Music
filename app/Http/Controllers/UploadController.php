<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Upload;  
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //

    public function upload()
    {
        return view('upload.index');
    }

    public function uploadmusic(Request $request)
    {
       $upload = new Upload;
       
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:5',
            'artist' => 'required|min:5|',
            'description' => 'required|min:5',
            'uploaded_by' => 'required|min:5',
            'category' => 'required|min:5',
            'music_name' => 'required',
        ]);
       
      if($validator->fails()){
        $request->session()->flash('alert-danger','Error: all fields required...');
        return to_route('music.upload'); 
      }
        $music = $request->file('music_name')->store('public/music');
       
        $upload->name = $request['name'];
        $upload->artist = $request['artist'];
        $upload->description = $request['description'];
        $upload->uploaded_by = $request['uploaded_by'];
        $upload->category = $request['category'];
        $upload->music_name = $music;
        $upload->status = '0';

        $upload->save();

        $request->session()->flash('alert-success','Uploaded Successfully Successfully');
        return to_route('music.upload'); 
        
      
      
          //  return to_route('music.upload'); 
    }
}
