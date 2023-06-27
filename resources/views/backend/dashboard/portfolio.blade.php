
  

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
        <!-- Small boxes (Stat box) -->

        @include('message')

        <a href="{{ url('admin/portfolio/add') }}" class="btn btn-primary">Add Portolio</a>

        <div class="row">
        
       
          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Name</th>
                      <th>Client</th>
                      <th>Languages</th>
                      <th>Preview</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach($getrecord as $value)
                    <tr>
                      <td>{{ $value->id }}</td>
                      <td>{{ $value->title }}</td>
                      <td>{{ $value->name }}</td>
                      <td>{{ $value->client }}</td>
                      <td>{{ $value->languages }}</td>
                      <td>{{ $value->preview }}</td>
                      <td>
                        @if(!empty($value->image))
                        
                        <!-- @if(file_exists(public_path('public/portfolio/'.$value->image))) -->
                   
                       
                        <img src="{{ url('public/portfolio/'.$value->image) }}" alt="" style="height:80px; width:80px;">


                        <!-- @endif -->

                        @endif
                      </td>
                      <td>
                        <a href="{{ url('admin/portfolio/edit/' . $value->id) }}" class="btn btn-primary">Edit</a>
                        <a onclick="return confirm('Sure to delete?')" href="{{ url('admin/portfolio/delete/' . $value->id) }}" class="btn btn-danger">Delete</a>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </section>

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