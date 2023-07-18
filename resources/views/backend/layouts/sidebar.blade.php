  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">The Maxwell James</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/admin/dashboard')}}" class="nav-link @if(Request::segment(2)== 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
      
          </li>
        
   
   
          <li class="nav-item">
            <a href="{{ url('admin/home')}}" class="nav-link @if(Request::segment(2)== 'home') active @endif">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('admin/about')}}" class="nav-link @if(Request::segment(2)== 'about') active @endif">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                About
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('admin/experience')}}" class="nav-link @if(Request::segment(2)== 'experience') active @endif">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                Experience
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('admin/portfolio')}}" class="nav-link @if(Request::segment(2)== 'portfolio') active @endif">
              <i class="nav-icon fa fa-briefcase"></i>
              <p>
                Portfolio
              </p>
            </a>
          </li>



          
          <li class="nav-item">
            <a href="{{ url('admin/contact')}}" class="nav-link @if(Request::segment(2)== 'contact') active @endif">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Contact
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('admin/blog')}}" class="nav-link @if(Request::segment(2)== 'blog') active @endif">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Blog
              </p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="{{ url('admin/social_icon')}}" class="nav-link @if(Request::segment(2)== 'social_icon') active @endif">
              <i class="nav-icon fas fa-share-alt"></i>
              <p>
                Social Icon
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('admin/my_account')}}" class="nav-link @if(Request::segment(2)== 'my_account') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                My Account
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('logout')}}" class="nav-link @if(Request::segment(2)== 'logout') active @endif">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
       
      
   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>