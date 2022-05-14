
@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
 <form method="POST" enctype="multipart/form-data" action="{{ url('add-post')}}" >
 @csrf
 <div id="container" style=" padding: 50px;">
<h2>Add Post</h2>
 <div class="form-group">
    <label >Post Title</label>
    <input type="text" class="form-control" name="postTitle" placeholder="Enter the title of your post here!">
  </div>
  <div class="form-group">
    <label >the artist name that related with this post</label>
    <input type="text" class="form-control" name="artistName" placeholder="Enter Artist Name here!">
  </div>

  <div class="form-group">
    <label >Post HighLight</label>
    <input type="text" class="form-control" name="postHighlight" placeholder="Enter the post highlight here!!">
  </div>
  <div class="form-group">
    <label >Post Summary</label>
    <input type="text" class="form-control" name="postNote" placeholder="Enter the post note here!!">
  </div>
  <div class="form-group">
    <select class="form-select" aria-label="Post" name="postType">
      <option value="News">News</option>
      <option value="Documentary">Documentary</option>
      <option value="Events">Events</option>
      <option value="LatestSongs">Latest Songs</option>
      <option value="OldSongs">Old Songs</option>
    </select>
    
  </div>
  
  
  <div class="form-group">
    <label >Post Details</label>
    <textarea id="editor1" class="form-control" name="postContent" rows="8" placeholder="Enter Post Details here!!"></textarea>
  </div>
  <div class="form-group">
                    <label>ADD YOUTUBE VIDEO LINK BELOW </label>
                    <textarea id="editcor1" class="form-control" name="youtubeLink" placeholder="Add embedded youtube link "></textarea>
                </div>
                    <div class="form-group text-center ml-3 mr-3  bg-primary btn btn-solid-border btn-round-full">
                      <label for="postImage" class="text-white">select image for this post</label>
                        <input type="file" name="postImage" placeholder="Choose image for this Post" id="postImage">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-md-3">
                    <div class="mt-1 text-center">
                        <div class="preview-post-image"> </div>
                    </div>  
                </div>
                   
                <div class="col-md-12 text-center">
                    <input type="submit" class="btn btn-primary btn-rounded" id="submit" value="Post">
                </div>
</form>
</div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
     <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#postImage').on('change', function() {
            multiImgPreview(this, 'div.preview-post-image');
        });
        });    
    </script>
@endpush