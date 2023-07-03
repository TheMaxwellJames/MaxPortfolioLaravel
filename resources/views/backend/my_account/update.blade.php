
  

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
            <h1 class="m-0">My Account Page</h1>
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
              <h3 class="class-title">My Account Page</h3>
        </div>

        <form action="{{ url('admin/my_account/update') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
          @csrf

          <div class="card-body">


            
          <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $getrecord->name }}" required>


            <span style="color: red;">{{$errors->first('name')}}</span>

              </div>

            </div>



            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Email<span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $getrecord->email }}" required>


                <span style="color: red;">{{$errors->first('email')}}</span>

              </div>

            </div>



            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Password<span style="color: red;"></span></label>
              <div class="col-sm-10">
                <input type="text" name="password" class="form-control" placeholder="Password" value="" >
               
                <b> (Leave Blank if you are not changing the password) </b>


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