
  

@include('backend.layouts.css')

<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

@include('backend.layouts.nav')



@include('backend.layouts.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
       
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      @include('message')
        <!-- Small boxes (Stat box) -->
        <div class="row">


        <div class="col-md-12">

            <div class="card card-info">
              
        <div class="card-header">
              <h3 class="class-title">Home Page</h3>
        </div>

        <form action="{{url('admin/home/post')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
          @csrf

          <div class="card-body">

            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Profile Image</label>
              <div class="col-sm-10">
                <input type="file" name="profile" class="form-control">

                @if(isset($getrecord[0]->profile))
                 <img src="{{ url('public/img/' . $getrecord[0]->profile) }}" width="200" height="200" alt="">
                @endif
              </div>
            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Your Name</label>
              <div class="col-sm-10">
                <input type="text" name="your_name" class="form-control" placeholder="Enter Name" value="{{ @$getrecord[0]->your_name }}">


          

              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Work Experience</label>
              <div class="col-sm-10">
                <input type="text" name="work_experience" class="form-control" placeholder="Enter Experience" value="{{ @$getrecord[0]->work_experience }}">
              </div>
            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
              <textarea name="description" class="form-control" placeholder="Enter Description" >{{ @$getrecord[0]->description }}</textarea>
              </div>
            </div>


          <input type="hidden" name="id" value="{{  @$getrecord[0]->id  }}">

          </div>

            <div class="card-footer">
            <button type="submit" name="add_to_update" id="add_to_update" value="@if(count($getrecord)>0) Edit @else Add @endif" class="btn btn-info">
              @if(count($getrecord)>0) Edit @else Add @endif    </button>
        
              <a href="" class="btn btn-default float-right">Cancel</a>
            </div>

        </form>

            </div>

        </div>

        
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
</div>
<!-- ./wrapper -->






@include('backend.layouts.footer')





@include('backend.layouts.script')
</body>
</html>