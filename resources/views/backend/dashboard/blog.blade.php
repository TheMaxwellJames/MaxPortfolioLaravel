
  

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
            <h1 class="m-0">Blog Page</h1>
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
        <!-- Small boxes (Stat box) -->

        @include('message')

        <a href="{{ url('admin/blog/add') }}" class="btn btn-primary">Add Blog</a>

        <div class="row">


          <section class="col-lg-12">

          <div class="card">

          <div class="card-header">

          <table class="table table-bordered table-hover">

          <thead>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Title</th>
              <th>Description</th>
              <th>Blog Description Text Editor</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($getrecord as $value)
            <tr>
              <td>{{$value->id}}</td>
              <td>
             

                  @if(!empty($value->image))
                        
              
                   
                       
                        <img src="{{ url('public/blog/'.$value->image) }}" alt="" style="height:80px; width:80px;">



                        @endif
              </td>
              <td>{{$value->title}}</td>
              <td>{{$value->description}}</td>
              <td>{!! $value->description_text_editor  !!}</td>

              <td>
          <a href="{{ url('admin/blog/edit/' . $value->id) }}" class="btn btn-primary">Edit</a>
           <a onclick="return confirm('Sure to delete?')" href="{{ url('admin/blog/delete/' . $value->id) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>

</table>

          </div>

          </div>

          </section>

        
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