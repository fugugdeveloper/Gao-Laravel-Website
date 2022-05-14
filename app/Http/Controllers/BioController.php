<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biography;
use App\Models\Comments;
use Illuminate\Support\Facades\DB;

class BioController extends Controller
{


    public function bioList()
    {
      $bios = Biography::paginate(9);
      return view('biography.bio_list', compact('bios'));
    }
    public function bioApi()
    {
      $bios = Biography::all();
      return $bios;
    }
    public function bioDetails($bioforArstist)
    {
      $artists = Biography::where('bioforArstist', $bioforArstist)->get();
      $comments = Comments::where('artistName', $bioforArstist)->get();
      // foreach($artists as $artist){
      //    $bios = $artist;
      // }
      return view('biography.view',['artists'=>$artists, "comments"=>$comments, "artistName"=> $bioforArstist]);
    }
    public function makeComments(Request $request)
    {
     $comments =new  Comments; 
     $comments->artistName=$request->input('artistName');
     $comments->userEmail=$request->input('userEmail');
     $comments->commentedBy=$request->input('commentedBy');
     $comments->comments=$request->input('comments');
     $request->input('artistName');
     $comments->save();
    $bioforArstist =$request->input('artistName');
     $artists = Biography::where('bioforArstist', $bioforArstist)->get();
     $comment = Comments::where('artistName',$bioforArstist)->get();
     return redirect('/biography/'.$bioforArstist)->with('status', 'Your comments have been submitted successfully!!');

    }
}
