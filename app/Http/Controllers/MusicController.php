<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class MusicController extends Controller
{
    //home page

    public function homePage()
    {
        return view('welcome');
    }
    
    //get all  
    public function allcategory()
    {
        $categories = Upload::where('status','1')
                    ->where('category','!=','audio')->get();
        return view('gallery.index',compact('categories'));
    }

    //get songs

    public function songs()
    {
        $songs = Upload::where('status','1')
                    ->where('category','Song')->get();
        return view('songs.index',compact('songs'));
    }

    //get instrumental

    public function instrumental()
    {
        $instrumentals = Upload::where('status','1')
        ->where('category','Instrumental')->get();
        return view('instrumental.index',compact('instrumentals'));
    }

    //get MP3

    public function audio()
    {
        $audios = Upload::where('status','1')
        ->where('category','audio')->get();
        return view('audio.index',compact('audios'));
    }

    public function watch($id)
    {
        $videos = Upload::find($id); 
        $categories = Upload::where('status','1')
                        ->where('id','!=',$id)
                        ->where('category','!=','audio')->get();
        return view('watch.watch-video',compact('videos','categories'));
    }

    public function search()
    {
        $search_text = $_GET['search'];
        $categories = Upload::where('status','1')
        ->where('category','!=','audio')
        ->where('name','LIKE','%'.$search_text.'%')
        ->orWhere('artist','LIKE','%'.$search_text.'%')->get();
        return view('search.index',compact('categories'));
    }

    public function searchAudio()
    {
        $search_text = $_GET['search'];
        $audios = Upload::where('status','1')
        ->where('category','audio')
        ->where('name','LIKE','%'.$search_text.'%')
        ->orWhere('artist','LIKE','%'.$search_text.'%')->get();
        return view('search.audio-search',compact('audios'));
    }
    
}
