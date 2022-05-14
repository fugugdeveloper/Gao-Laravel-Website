<?php

namespace App\Http\Controllers;
use App\Models\Biography;
use App\Models\Artists;
use App\Models\Albums;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

  
public function albumList($artistName)
{
    $albums = Albums::where("artistName", $artistName)->paginate(2);
    return view('pages.archive.album.album_list', compact('albums'));

}
public function artistList()
{
    $artistList= Artists::all();
    return view('pages.archive.album.artist_list', compact('artistList'));   
}
public function albumDetail()
{
    $bios = Biography::all();
    return view('pages.archive.album.album', compact('bios'));  
}

    //
}
