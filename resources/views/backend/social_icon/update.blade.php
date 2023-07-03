
  

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
            <h1 class="m-0">Social Icon Page</h1>
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
              <h3 class="class-title">Social Icon Page</h3>
        </div>

        <form action="{{ url('admin/social_icon/update/'.$getrecord->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
          @csrf

          <div class="card-body">


            
          <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $getrecord->name }}" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Email<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $getrecord->email }}" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Mobile<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="mobile" class="form-control" placeholder="Mobile" value="{{ $getrecord->mobile }}" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Facebook<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="{{ $getrecord->facebook }}" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Twitter<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="{{ $getrecord->twitter }}" required>


              </div>

            </div>



            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Instagram<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="{{ $getrecord->instagram }}" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Github<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="github" class="form-control" placeholder="Github" value="{{ $getrecord->github }}" required>


              </div>

            </div>



          



          


        

          </div>

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        
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