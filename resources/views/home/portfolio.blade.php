<!DOCTYPE html>
<html lang="en">


<head>
@include('home.css')
</head>

<body class="portfolio">

<!-- Header Starts -->


@include('home.header')


<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->


                @foreach($getrecord as $value)
                <li>
                    <figure>
                        <img src="{{ url('public/portfolio/'.$value->image) }}" alt="Portolio Image" />
                        <div><span>{{$value->title}}</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                @endforeach
              
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
                <!-- Portfolio Item Detail Starts -->
                @foreach($getrecord as $value)
                <li>
             
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>{{$value->title}}</h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">{{$value->name}}</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">{{$value->client}}</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">{{$value->languages}}</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="https://{{$value->preview}}" target="_blank">{{$value->preview}}</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <img src="{{ url('public/portfolio/'.$value->image) }}" alt="Portolio Image" />
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                @endforeach
                <!-- Portfolio Item Detail Ends -->
               
              
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png" alt="previous"></span>
                <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="next"></span>
                <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
    </div>
</section>
<!-- Main Content Ends -->

<!-- Template JS Files -->


@include('home.script')

</body>



</html>
