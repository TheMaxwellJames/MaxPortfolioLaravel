<!DOCTYPE html>
<html lang="en">



<head>
@include('home.css')
    
</head>

<body class="blog-post">


@include('home.header')
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Article Starts -->
            <article class="col-12">
                <!-- Meta Starts -->
            
                <!-- Meta Ends -->
                <!-- Article Content Starts -->
                <h1 class="text-uppercase text-capitalize">{{ $getrecord->title }}</h1>
                <img src="{{ url('public/blog/'.$getrecord->image) }}" class="img-fluid" alt="Blog image"/>
                <div class="blog-excerpt open-sans-font pb-5">
                    <p>
                    {!! $getrecord->description_text_editor !!}
                    </p>
                </div>
                <!-- Article Content Ends -->
            </article>
            <!-- Article Ends -->
        </div>
    </div>
</section>

@include('home.script')
</body>



</html>
