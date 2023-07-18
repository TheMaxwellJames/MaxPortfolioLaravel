
  

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

        <form action="{{url('admin/experience/post')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
  
            <div class="card-body">
  
        
  
  
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Year of Experience</label>
                    <div class="col-sm-10">
                      <input type="text" name="year_of_experience" class="form-control" placeholder="Year of Experience" value="{{ @$getrecord[0]->year_of_experience }}">
                  
                    </div>
                  </div>
  
  
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" placeholder="Title" value="{{ @$getrecord[0]->title }}">
                  
                    </div>
                  </div>
  
  
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Sub Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="sub_title" class="form-control" placeholder="Sub Title" value="{{ @$getrecord[0]->sub_title }}">
                  
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" name="description" class="form-control" placeholder="Description" value="{{ @$getrecord[0]->description }}">
                  
                    </div>
                  </div>
  
  
            <input type="hidden" name="id" value="{{  @$getrecord[0]->id  }}">
  
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