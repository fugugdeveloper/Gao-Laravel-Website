
@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
 <form method="post" enctype="multipart/form-data" action="{{ url('add-bio')}}" >
 @csrf
 <div id="container" style=" padding: 50px;">
<h2>Add Biography</h2>
 <div class="form-group">
    <label >Artist Name</label>
    <input type="text" class="form-control" name="artistName" placeholder="Enter the Artist Name">
  </div>
  <div class="form-group">
    <label >Author Or Source of Biography</label>
    <input type="text" class="form-control" name="authorName" placeholder="Enter the author or source of this biography">
  </div>

  <div class="form-group">
    <label >Birth Place of Artists</label>
    <input type="text" class="form-control" name="bioBirthPlace" placeholder="Enter the birth place of this Artist">
  </div>
  <div class="form-group">
    <label >Birth Date of Artists</label>
    <input type="date" class="form-control" name="bioBirthDate" placeholder="Enter the birth date of this Artist">
  </div>
  <div class="form-group">
    <label >Bio Details</label>
    <textarea id="editor1" class="form-control" name="bioContent" rows="4" placeholder="Enter Bio Details"></textarea>
  </div>
  <!-- <div class="form-group"> -->
	  <!-- <label  >Category</label> -->
	  <!-- <select  class="day" name="category_id" class="form-control">
		  <?php //foreach($categories as $category): ?>
		  	<option value="<?php //echo $category['id']; ?>"><?php //echo $category['name']; ?></option>
		  <?php //endforeach; ?>
	  </select> -->
  <!-- </div> -->

                    <div class="form-group text-center ml-3 mr-3  bg-primary btn btn-solid-border btn-round-full">
                      <label for="image" class="text-white">select image for this artist</label>
                        <input type="file" name="image" placeholder="Choose image for this artist" id="image">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
              
                    <div class="col-md-3">
                    <div class="mt-1 text-center">
                        <div class="preview-bio-image"> </div>
                    </div>  
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-rounded" id="submit">Submit</button>
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

        $('#image').on('change', function() {
            multiImgPreview(this, 'div.preview-bio-image');
        });
        });    
    </script>
@endpush