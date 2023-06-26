
  

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
            <h1 class="m-0">About Page</h1>
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
  <h3 class="class-title">About Page</h3>
</div>

<form action="{{url('admin/about/post')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
@csrf

<div class="card-body">

<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">First Name</label>
  <div class="col-sm-10">
    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Last Name</label>
  <div class="col-sm-10">
    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Age</label>
  <div class="col-sm-10">
    <input type="number" name="age" class="form-control" placeholder="Enter Age">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Nationality</label>
  <div class="col-sm-10">
    <input type="text" name="nationality" class="form-control" placeholder="Enter Nationality">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Freelance</label>
  <div class="col-sm-10">
    <input type="text" name="freelance" class="form-control" placeholder="Freelance">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Address</label>
  <div class="col-sm-10">
    <input type="text" name="address" class="form-control" placeholder="Enter Address">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Phone</label>
  <div class="col-sm-10">
    <input type="number" name="phone" class="form-control" placeholder="Phone">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="email" name="email" class="form-control" placeholder="Enter Email">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Github</label>
  <div class="col-sm-10">
    <input type="text" name="github" class="form-control" placeholder="Github">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Languages</label>
  <div class="col-sm-10">
    <input type="text" name="languages" class="form-control" placeholder="Enter Languages">

  </div>
</div>



<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Years of Experience</label>
  <div class="col-sm-10">
    <input type="text" name="years_of_experience" class="form-control" placeholder="Years of Experience ">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Completed Projects</label>
  <div class="col-sm-10">
    <input type="text" name="completed_projects" class="form-control" placeholder="Completed Projects">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Happy Customers</label>
  <div class="col-sm-10">
    <input type="text" name="happy_customers" class="form-control" placeholder="Happy Customers ">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Awards Won</label>
  <div class="col-sm-10">
    <input type="text" name="awards_won" class="form-control" placeholder="Awards Won">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Html</label>
  <div class="col-sm-10">
    <input type="text" name="html" class="form-control" placeholder="Html">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Javascript</label>
  <div class="col-sm-10">
    <input type="text" name="javascript" class="form-control" placeholder="Javascript">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Css</label>
  <div class="col-sm-10">
    <input type="text" name="css" class="form-control" placeholder="CSS">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">PHP</label>
  <div class="col-sm-10">
    <input type="text" name="php" class="form-control" placeholder="PHP">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Laravel</label>
  <div class="col-sm-10">
    <input type="text" name="laravel" class="form-control" placeholder="Laravel">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Flutter</label>
  <div class="col-sm-10">
    <input type="text" name="flutter" class="form-control" placeholder="Flutter">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Python</label>
  <div class="col-sm-10">
    <input type="text" name="python" class="form-control" placeholder="Python">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Django</label>
  <div class="col-sm-10">
    <input type="text" name="django" class="form-control" placeholder="Django">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Year of Experience</label>
  <div class="col-sm-10">
    <input type="text" name="year_of_experience" class="form-control" placeholder="Year of Experience">

  </div>
</div>



<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Title</label>
  <div class="col-sm-10">
    <input type="text" name="title" class="form-control" placeholder="Title">

  </div>
</div>



<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Sub Title</label>
  <div class="col-sm-10">
    <input type="text" name="sub_title" class="form-control" placeholder="Sub Title">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Description</label>
  <div class="col-sm-10">
    <input type="text" name="description" class="form-control" placeholder="Description">

  </div>
</div>



</div>

<div class="card-footer">
<button type="submit" class="btn btn-info">Submit</button>

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