<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
      <div class="user-profile">
          <div class="ulogo">
            <a href="/dashboard">
              <!-- logo for regular state and mobile devices -->
              <div class="d-flex align-items-center justify-content-center">					 	
                  <img src="{{ asset('backend/images/logo-dark.png')}}" alt="">
                  <h3>Admin Panel</h3>
              </div>
            </a>
          </div>
      </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		   <li>
            <a href="/dashboard">
              <i data-feather="pie-chart"></i>
                <span>Dashboard</span>
            </a>
        </li>  
		
        @if (Auth::user()->role == 'Admin')
            
         
        <li class="treeview">
          <a href="#">
            <i data-feather="users"></i>
            <span>Manage Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View Student</a></li>
            <li><a href="{{route('user.add')}}"><i class="ti-more"></i>Add Student</a></li>
          </ul>
        </li> 

        @endif  

        <li class="treeview">
          <a href="#">
            <i data-feather="settings"></i> <span>Your Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">            
            <li><a href="{{route('profile.view')}}"><i class="ti-more"></i>Your Profile</a></li>
            <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>            
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="user"></i> <span>Your Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view.reg') }}"><i class="ti-more"></i>Apply for Course</a></li>          
          </ul>
        </li>

     
       
        <li class="treeview">
          <a href="#">
            <i data-feather="book"></i> <span>Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view.courses') }}"><i class="ti-more"></i>View Course</a></li> 
            
          </ul>
        </li>

        @if (Auth::user()->role == 'Admin')
        <li class="treeview">
          <a href="#">
            <i data-feather="users"></i> <span>Registered Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('view.reg') }}"><i class="ti-more"></i>View Registered Student</a></li> 
            
          </ul>
        </li>
        @endif
        
		

       
      </ul>
    </section>
	
	<div class="sidebar-footer">
	
	</div>
  </aside>