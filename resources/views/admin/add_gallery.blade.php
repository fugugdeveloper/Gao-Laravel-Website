
@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
 <form method="POST" enctype="multipart/form-data" action="{{ url('add-gallery') }}" >
 @csrf
 <div id="container" style=" padding: 50px;">
     <h2>Add Gallery</h2>
 <div class="form-group">
    <label >Artist Name</label>
    <input type="text" class="form-control" name="artistName" placeholder="Enter the Artist Name">
  </div>
  <div class="form-group">
    <label >Place where image is captured!!</label>
    <input type="text" class="form-control" name="imagePlace" placeholder="Enter the place of image captured">
  </div>
 
  

                    <div class="form-group text-center ml-3 mr-3  bg-primary  btn  btn-round-full">
                      <label for="galleryImage" class="text-white">select image for your gallery</label>
                        <input type="file" placeholder="Choose image for this gallery" accept="image/*" multiple name="galleryImage[]"  id="galleryImage">
                    @error('gallery')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
              
                <div class="row">
                <div class="col-md-12 col-12">
                    <div class="mt-1 text-center">
                        <div class="preview-image"> </div>
                    </div>  
                </div>
               
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-round-full" id="submit">Submit</button>
                </div>
</form>
@if($errors->any())
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif
</div>
  </div>
@endsection

@push('js')
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

        $('#galleryImage').on('change', function() {
            multiImgPreview(this, 'div.preview-image');
        });
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

        $('#coverImage').on('change', function() {
            multiImgPreview(this, 'div.preview-image-cover');
        });
        });    
    </script>
@endpush