@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ route('dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>SMS</b></h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href="{{ route('dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
      @if(Auth::user()->role == 'Admin')
        <li class="treeview {{ ($prefix == '/users')?'active':'' }}">
          <a href="#">
            <i data-feather="users"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('users.add') }}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li> 
		  @endif
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="user"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
            <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li>
		 
        <li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
          <a href="#">
            <i data-feather="settings"></i> <span>Setup Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Student Classes</a></li>
            <li><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Student Year</a></li>
            <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Student Group</a></li>
            <li><a href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Student Shift</a></li>
            <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a></li>
            <li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category Amount</a></li>
            <li><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exam Type</a></li>
            <li><a href="{{ route('school.subject.view') }}"><i class="ti-more"></i>School Subject</a></li>
            <li><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Assign Subject</a></li>
            <li><a href="{{ route('designation.view') }}"><i class="ti-more"></i>Designation </a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/students')?'active':'' }}">
          <a href="#">
            <i data-feather="user-check"></i> <span>Student Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('student.registration.view') }}"><i class="ti-more"></i>Student Registration</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
            <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
            <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
            <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
            <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
            <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
          </ul>
        </li>
		
          <ul class="treeview-menu">
            <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
			<li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
			<li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
			<li><a href="auth_user_pass.html"><i class="ti-more"></i>Password</a></li>
			<li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
			<li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>	
          </ul>
        </li> 		  		  
		  
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="{{ route('admin.logout') }}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>