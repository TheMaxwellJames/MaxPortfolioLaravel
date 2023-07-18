
  

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
    <label for="" class="col-sm-2 col-form-label">Profile Image</label>
    <div class="col-sm-10">
      <input type="file" name="profile" class="form-control">

      @if(isset($getrecord[0]->profile))
       <img src="{{ url('public/img/' . $getrecord[0]->profile) }}" width="200" height="200" alt="">
      @endif
    </div>
  </div>

  

<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">First Name</label>
  <div class="col-sm-10">
    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="{{ @$getrecord[0]->first_name }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Last Name</label>
  <div class="col-sm-10">
    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="{{ @$getrecord[0]->last_name }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Age</label>
  <div class="col-sm-10">
    <input type="number" name="age" class="form-control" placeholder="Enter Age" value="{{ @$getrecord[0]->age }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Nationality</label>
  <div class="col-sm-10">
    <input type="text" name="nationality" class="form-control" placeholder="Enter Nationality" value="{{ @$getrecord[0]->nationality }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Freelance</label>
  <div class="col-sm-10">
    <input type="text" name="freelance" class="form-control" placeholder="Freelance" value="{{ @$getrecord[0]->freelance }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Address</label>
  <div class="col-sm-10">
    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{ @$getrecord[0]->address }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Phone</label>
  <div class="col-sm-10">
    <input type="number" name="phone" class="form-control" placeholder="Phone" value="{{ @$getrecord[0]->phone }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ @$getrecord[0]->email }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Github</label>
  <div class="col-sm-10">
    <input type="text" name="github" class="form-control" placeholder="Github" value="{{ @$getrecord[0]->github }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Languages</label>
  <div class="col-sm-10">
    <input type="text" name="languages" class="form-control" placeholder="Enter Languages" value="{{ @$getrecord[0]->languages }}">

  </div>
</div>



<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Years of Experience</label>
  <div class="col-sm-10">
    <input type="text" name="years_of_experience" class="form-control" placeholder="Years of Experience " value="{{ @$getrecord[0]->years_of_experience }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Completed Projects</label>
  <div class="col-sm-10">
    <input type="text" name="completed_projects" class="form-control" placeholder="Completed Projects" value="{{ @$getrecord[0]->completed_projects }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Happy Customers</label>
  <div class="col-sm-10">
    <input type="text" name="happy_customers" class="form-control" placeholder="Happy Customers " value="{{ @$getrecord[0]->happy_customers }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Awards Won</label>
  <div class="col-sm-10">
    <input type="text" name="awards_won" class="form-control" placeholder="Awards Won" value="{{ @$getrecord[0]->awards_won }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Html</label>
  <div class="col-sm-10">
    <input type="text" name="html" class="form-control" placeholder="Html" value="{{ @$getrecord[0]->html }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Javascript</label>
  <div class="col-sm-10">
    <input type="text" name="javascript" class="form-control" placeholder="Javascript" value="{{ @$getrecord[0]->javascript }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Css</label>
  <div class="col-sm-10">
    <input type="text" name="css" class="form-control" placeholder="CSS" value="{{ @$getrecord[0]->css }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">PHP</label>
  <div class="col-sm-10">
    <input type="text" name="php" class="form-control" placeholder="PHP" value="{{ @$getrecord[0]->php }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Laravel</label>
  <div class="col-sm-10">
    <input type="text" name="laravel" class="form-control" placeholder="Laravel" value="{{ @$getrecord[0]->laravel }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Flutter</label>
  <div class="col-sm-10">
    <input type="text" name="flutter" class="form-control" placeholder="Flutter" value="{{ @$getrecord[0]->flutter }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Python</label>
  <div class="col-sm-10">
    <input type="text" name="python" class="form-control" placeholder="Python" value="{{ @$getrecord[0]->python }}">

  </div>
</div>


<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Django</label>
  <div class="col-sm-10">
    <input type="text" name="django" class="form-control" placeholder="Django" value="{{ @$getrecord[0]->django }}">

  </div>
</div>


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