<?php

namespace App\Http\Controllers;
use App\Models\Biography;
use App\Models\Youtube;
use App\Models\Gallery;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
class AdminController extends Controller
{
    use RegistersUsers;
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function index()
    {
        $bios = Biography::all();
        $bioCount=Biography::all()->count();
        $galleryCount=Gallery::all()->count();
        $youtubeCount=Youtube::all()->count();
        $postCount=Posts::all()->count();
        return view('dashboard', compact(['bios','bioCount','galleryCount', 'youtubeCount','postCount']));
    }
    public function updateBio(){
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
    
           $name = $request->file('image')->getClientOriginalName();
           $path = $request->file('image')->store('artist_image');
           $bio = new Biography;
           $bio->bioforArstist=$request->input('artistName');
           $bio->bioDetails=$request->input('bioContent');
           $bio->bioAuthor=$request->input('authorName');
           $bio->bioImageUrl =Str::after($path, 'public/');
           $bio->bioBirthPlace=$request->input("bioBirthPlace");
           $birthDate= Carbon::parse($request->input("bioBirthDate"));
           $currentDate=Carbon::now();
           $bio->bioAge=$birthDate->diffInYears($currentDate);
           $bio->bioBirthDate=$request->input("bioBirthDate");
           $bio->update();
    
           return redirect('bio-post')->with('status', 'Bio data has been added successfully!!');
    
    }
    public function bioDelete($artistName)
    {
        $checker = Biography::where('bioforArstist', $artistName)->delete();
        if ($checker) {
         
        return redirect('home')->with('status', 'bio of $artistName is deleted successfully!!');   
        }
    }
    public function bioPost()
    {
        return view('admin.add_biography');
    }
    public function addBio(Request $request)
    {
         
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,JPG,PNG,JPEP,GIF,SVG,jpeg,gif,svg|max:1048576',
 
        ]);
 
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('artist_image');
        $bio = new Biography;
        $bio->bioforArstist=$request->input('artistName');
        $bio->bioDetails=$request->input('bioContent');
        $bio->bioAuthor=$request->input('authorName');
        $bio->bioImageUrl =Str::after($path, 'public/');
         $bio->bioBirthPlace=$request->input("bioBirthPlace");
         $birthDate= Carbon::parse($request->input("bioBirthDate"));
         $currentDate=Carbon::now();
         $bio->bioAge=$birthDate->diffInYears($currentDate);
        $bio->bioBirthDate=$request->input("bioBirthDate");
        
        $bio->save();
 
        return redirect('bio-post')->with('status', 'Bio data has been added successfully!!');
 
    }
    public function galleryPost()
    {
        return view("admin.add_gallery");
    }
    public function addGallery(Request $request)
    {

      $validatedData = $request->validate([
        'galleryImage' => 'required',
        'galleryImage.*' => 'max:1048576']);
        $allowedfileExtension = ['jpg','png','jpeg','gif','svg'];
   if($request->hasfile('galleryImage'))
           {
              foreach($request->file('galleryImage') as $file)
              {
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                // Checking the image extension
                if (!$check) {
                    return redirect()->back()->with('errors', 'Images must be jpg,png,jpeg,gif orsvg!');
                }
                
                   
                   $path = $file->store('gallery');
                   $Imgdata[] = Str::after($path,'public/');
                
              }
        
           }
          
           $gallery = new Gallery;
           $gallery->artistName=$request->input('artistName');
           $gallery->imagePlace=$request->input('imagePlace');
           $gallery->capturedDate=Carbon::now();
           $gallery->artistImages = $Imgdata;
           $gallery->save();
           return redirect('gallery-post')->with('status', 'Gallery data has been added successfully');
    
        }
    public function addYoutubeLink(Request $request)
      {
        
           $youtube = new Youtube;
           $youtube->title=$request->input('title');
           $youtube->link=$request->input('body');
           $youtube->artistName=$request->input('artistName');
           $youtube->videoCategory=$request->input('videoCategory');
           $youtube->created_at=Carbon::now();
           $youtube->save();
        return redirect('youtube-post')->with('status', 'Youtube data has been added successfully');
    
    }
    public function youtubePost()
    {
        return view("admin.add_youtube");
    }
    public function createAccount()
    {
        return view("admin.add_user");
    }
    public function addUser(Request $request)
    {
        $user = new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));

   $user->save();
    return redirect('create-account')->with('status', 'new user account created successfully!!');
        
    }
    public function postForm()
    {
       return view('admin.add_post');
    }

    public function addPost(Request $request)
    {
    
      
        $validatedData = $request->validate([
            'postImage' => 'required|image|mimes:jpg,png,JPG,PNG,JPEP,GIF,SVG,jpeg,gif,svg|max:1048576',
    
           ]);
           $name = $request->file('postImage')->getClientOriginalName();
           $path = $request->file('postImage')->store('posts');
           $post = new Posts;
                 
           $post->postTitle=$request->input('postTitle');
           $post->postNote=$request->input('postNote');
           $post->postType=$request->input('postType');
           $post->postHighlight=$request->input('postHighlight');
           $post->postContent=$request->input('postContent');
           $post->artistName=$request->input('artistName');
           $post->youtubeLink=$request->input('youtubeLink');
           $post->postImage =Str::after($path, 'public/');
           $post->created_at=Carbon::now();
           $post->save();
    
           return redirect('gao-post-form')->with('status', 'Post data has been added successfully!!');
    
    }
}