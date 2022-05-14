@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<!-- start of biography modal-->
<form action="{{url('bio-update')}}" method="post">
<div class="modal fade" id="modalBiographyForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Bio update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
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
               

      </div>
      <div class="modal-footer d-flex justify-content-center">
      <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-rounded" id="submit">Submit</button>
                </div>
      </div>
    </div>
  </div>
</div>
</form>
<!-- end of biography modal-->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
              <i class="fa fa-image"></i>
              </div>
              <p class="card-category">Gao Gallery</p>
              <h5 class="card-title">
              {{$galleryCount}} gallery found!!</small>
              </h5>
            </div>
            <div class="card-footer">
              <div class="stats">
              
                <a href="/add-gallery">GALLERY</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="fa fa-history"></i>
              </div>
              <p class="card-category">Gao Biograpy</p>
              <h3 class="card-title">{{$bioCount}} bio found!</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                Biography
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="ti-youtube"></i>
              </div>
              <p class="card-category">Gao Youtube Channel</p>
              <h3 class="card-title">{{$youtubeCount}} video found</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
            Youtube   
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-blog"></i>
              </div>
              <p class="card-category">Gao Post</p>
              <h3 class="card-title">{{$postCount}} post found!!</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
            Post     
            </div>
            </div>
          </div>
        </div>
      </div>
   
      <div class="row">
        
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Biography List:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">Artist</i> Name
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> Details
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                    
                        <tbody>
                        @foreach ($bios as $bio)
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>{{$bio->bioforArstist}}</td>
                            <td class="td-actions text-right">
                            <a href="" class="btn btn-success btn-link btn-lg" data-toggle="modal" data-target="#modalBiographyForm"><i class="fa-2x ti-pencil"></i></a>
                            
                              <a  rel="tooltip" href="/bio-remove/{{$bio->bioforArstist}}" class="btn btn-danger btn-link btn-lg">
                                <i class="fa-2x ti-trash"></i>
                            </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                          @foreach($bios as $bio)
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>{{$bio->bioDetails}}
                            </td>
                            <td class="td-actions text-right">
                            <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalBiographyForm"><i class="material-icons">edit</i></a>
                            
                              <a href="/bio-remove/{{$bio->bioforArstist}}"  rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </a>
                            </td>
                          </tr>
                          @endforeach
                        
                        </tbody>
                      </table>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
       
       
      </div>
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
@endpush