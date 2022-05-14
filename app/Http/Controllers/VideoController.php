<?php

namespace App\Http\Controllers;
use App\Models\Youtube;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function video()
    {
    return view("pages.archive.gao_video");
    }
    public function youtube()
    {
        $youtubes = Youtube::paginate(2);
    return view("youtube.youtube", compact('youtubes'));
    }
}
