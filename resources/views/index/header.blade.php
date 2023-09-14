<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box @if(Request::segment(1) == '' )active @endif">
            <i class="fa fa-home"></i>
            <a href="{{url('/')}}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box @if(Request::segment(1) == 'about') active @endif">
            <i class="fa fa-user"></i>
            <a href="{{url('about')}}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box  @if(Request::segment(1) == 'portfolio') active @endif">
            <i class="fa fa-briefcase"></i>
            <a href="{{url('portfolio')}}">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box  @if(Request::segment(1) == 'contact') active @endif">
            <i class="fa fa-envelope-open"></i>
            <a href="{{url('contact')}}">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box  @if(Request::segment(1) == 'blog') active @endif">
            <i class="fa fa-comments"></i>
            <a href="{{url('blog')}}">
                <h2>Blog</h2>
            </a>
        </li>

        <li class="icon-box  @if(Request::segment(1) == 'newsletter') active @endif">
            <i class="fa fa-envelope"></i>
            <a href="{{url('newsletter')}}">
                <h2>newsletter</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="@if(Request::segment(1) == '' )active @endif"><a href="{{url('/')}}"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li class="@if(Request::segment(1) == 'about') active @endif" ><a href="{{url('about')}}"><i class="fa fa-user"></i><span>About</span></a></li>
                <li class="@if(Request::segment(1) == 'portfolio') active @endif" ><a href="{{url('portfolio')}}"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li class="@if(Request::segment(1) == 'contact') active @endif" ><a href="{{url('contact')}}"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li class="@if(Request::segment(1) == 'blog') active @endif" ><a href="{{url('blog')}}"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                <li class="@if(Request::segment(1) == 'newsletter') active @endif" ><a href="{{url('newsletter')}}"><i class="fa fa-comments"></i><span>newsletter</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
