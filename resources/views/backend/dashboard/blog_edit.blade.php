
  

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
            <h1 class="m-0">Edit Blog Page</h1>
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
              <h3 class="class-title">Edit Blog Page</h3>
        </div>

        <form action="{{ url('admin/blog/edit/' .$getrecord->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
          @csrf

          <div class="card-body">




          <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Blog Image <span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="file" name="image" class="form-control">

                @if($getrecord->image)

                <img src="{{ url('public/blog/'.$getrecord->image) }}" alt="" style="height:80px; width:80px;">

                @endif
             
              </div>
            </div>


            
          <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Blog Title <span style="color: red;">*</span></label>
              <div class="col-sm-10">
                <input type="text" name="title" class="form-control" placeholder="Blog Title" value="{{$getrecord->title}}" required>


              </div>

            </div>


            


            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Blog Description<span style="color: red;">*</span></label>
              <div class="col-sm-10">
               <textarea name="description" type="text" class="form-control" placeholder="Blog Description">{{$getrecord->description}}</textarea>


              </div>

            </div>




            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Blog Description  Text Editor<span style="color: red;">*</span></label>
              <div class="col-sm-10">
               <textarea name="description_text_editor" type="text" class="form-control editor" placeholder="Text Editor">{{$getrecord->description_text_editor}}</textarea>


              </div>

            </div>


          


    



          




          


        

          </div>

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        
              <a href="{{ url('admin/blog') }}" class="btn btn-default float-right">Cancel</a>
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.5.1/tinymce.min.js"></script>

<script type="text/javascript">


tinymce.init({


  selector:  '.editor',


  height: '500px',
              plugins: 'link code image textcolor codesample',
                      codesample_language: [
                        {text: 'HTML/XML', value:'markup'},
                        {text: 'JavaScript', value:'javascript'},
                        {text: 'CSS', value:'css'},
                        {text: 'PHP', value:'php'},
                        {text: 'Ruby', value:'ruby'},
                        {text: 'Python', value:'python'},
                        {text: 'Java', value:'java'},
                        {text: 'C', value:'c'},
                        {text: 'C#', value:'csharp'},
                        {text: 'C++', value:'cpp'},
                      ],


                      

                      toolbar: [
                        "fontselect | bullist numlist outdent indent | undo redo | fontsizeselect | styleselect | bold italic link image", "codesample",
                        "alignleft aligncenter alignright Justify | forecolor backcolor", "fullscreen"

                      ],



                      fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
                              font_formats: 'Arial=arial, helvetica, sans-serif; Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n',


})

</script>
</body>
</html>