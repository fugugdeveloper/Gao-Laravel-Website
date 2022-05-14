
@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div id="container" style=" padding: 50px;">
                <form method="post" enctype="multipart/form-data" action="{{ url('add-youtube-link') }}" >
                @csrf
                <div class="form-group">
                    <label >TITLE</label>
                    <input type="text" class="form-control" name="title" placeholder="Add Title">
                </div>
                <div class="form-group">
                    <label>ADD YOUTUBE VIDEO LINK BELOW </label>
                    <textarea id="editcor1" class="form-control" name="body" placeholder="Add embedded youtube link "></textarea>
                </div>
                <div class="form-group">
                    <label >Artist Name</label>
                    <input type="text" class="form-control" name="artistName" placeholder="Add Artist Name">
                </div>
                <div class="form-group">
                    <label>GAO VIDEO</label>
                    <select  class="day"  name="videoCategory" class="form-control">
                        <option value="Song">Song</option>
                        <option value="Documentory">Documentory</option>
                        <option value="Support">Support</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <button class="btn btn-primary" type="submit" >SUBMIT</button>
                <!--button type="submit" class="btn btn-default">Submit</button-->
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
@endpush