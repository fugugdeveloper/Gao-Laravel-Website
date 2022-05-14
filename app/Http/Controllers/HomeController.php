<?php

namespace App\Http\Controllers;
use App\Models\Biography;
use App\Models\Comments;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Posts;
class HomeController extends Controller
{
    public function index(){
     
      $bios = Biography::paginate(9);
      $posts = Posts::paginate(5);
    return view("welcome",['bios'=>$bios, 'posts'=>$posts]);
    }
    public function supporting(Type $var = null)
    {
        return view("pages.supporting");
    }
    public function userSubscribtion(Request $request)
    {
        
    }
    public function postIndex()
    {
      $posts = Posts::paginate(9);
      return view("posts.post",['posts'=>$posts]);
    }
    public function postPage($artist)
    {

      $posts = Posts::where("artistName",$artist)->get();
      $comments = Comments::where('artistName', $artist)->get();
 
      return view("posts.view",["posts"=>$posts,"comments"=>$comments, "artistName"=>$artist]);
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
    $posts = Posts::where("artistName",$bioforArstist)->get();
    $comments = Comments::where('artistName', $bioforArstist)->get();
     return redirect('/post/'.$bioforArstist)->with('status', 'Your comments have been submitted successfully!!');

    }
}
