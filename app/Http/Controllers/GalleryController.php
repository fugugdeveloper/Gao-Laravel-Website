<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
  public function index()
  {$galleries= Gallery::paginate(1);
    return view("gallery.gallery", compact('galleries'));
  }
  
}
