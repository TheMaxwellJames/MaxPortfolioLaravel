
  

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
            <h1 class="m-0">Portfolio Page</h1>
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
              <h3 class="class-title">Portfolio Page</h3>
        </div>

        <form action="{{ url('admin/portfolio/add') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
          @csrf

          <div class="card-body">


            
          <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Portfolio Title <span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="title" class="form-control" placeholder="Portfolio Title" value="" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Project Name <span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="Project Name" value="" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Client Name <span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="client" class="form-control" placeholder="Client Name" value="" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Languages <span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="languages" class="form-control" placeholder="Languages" value="" required>


              </div>

            </div>


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Preview <span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="preview" class="form-control" placeholder="Preview" value="" required>


              </div>

            </div>



            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Portolio Image <span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="file" name="image" class="form-control" required>

             
              </div>
            </div>




          


        

          </div>

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        
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