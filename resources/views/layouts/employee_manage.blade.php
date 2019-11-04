
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Control Panel</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">


    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>CP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><small><b>Admin </b>Control Panel</small></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
    
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        
       
        <i class="fa fa-circle text-success"></i> Online</a>
          
          
        </div>
        <br/><br/>
      </div>
      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Actions</li>
        <!-- Optionally, you can add icons to the links -->
        
        
          
                @section('home')
                        
                @show
            
          <li class="">
  
            <i class="fa fa-home"></i><span>Home</span></a></li>

            
          
                    @section('manageEmp')
                        
                    @show
            
                <li class="active">
                
        
                  <i class="fa fa-user"></i><span>Manage Employee</span></a></li>

                  <li class="">
              
                
                      <li class="">
                          
                              @section('salary_grp')
                              
                              @show
                          
              
                        <i class="fa fa-user"></i><span>Salary Group</span></a></li> 

                        <li class="">
              
                
                          <li class="">
                              
                                  @section('salary_manage')
                                  
                                  @show
                              
                  
                            <i class="fa fa-home"></i><span>Manage Salary</span></a></li> 

                            <li class="">
                              <li class="">
                                
                                @section('attendance')
                                
                                @show
                            
                
                          <i class="fa fa-user"></i><span>Employee Attendance</span></a></li>

        <li class=""><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        <i class="fa fa-sign-out"></i> <span>Sign-Out</span></a></li>
        
      </ul>

  
                                       
                                    

                                   

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
      <section class="content">

            @section('core')
                        
            @show


</section>
</div>
</div>

<div class="modal fade" id="createEmp">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Create Employee Account</h4>
            </div>
            <div class="modal-body">
              
                <form action="{{route('addemp')}}" method="post">
                        {{csrf_field()}}
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                    <label for="name">Employee Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Employee name">
                    </div>

                    <div class="form-group">
                    <label for="epf">EPF Number</label>
                    <input type="text" class="form-control" name="epf" id="epf" placeholder="EPF Number">
                    </div>   

                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control select2" name="department" style="width: 100%;">
                            <option selected="selected">Customer Care</option>
                            <option>Design</option>
                            <option>Develop</option>
                            <option>Web</option>
                            <option>Mobile App</option>
                            <option>Financial</option>
                            <option>reasearch</option>
                        </select>
                        </div>

                        <div class="form-group">
                                <label>Designation</label>
                                <select class="form-control select2" name="designation" style="width: 100%;">
                                    <option selected="selected">Software Enginneer</option>
                                    <option>Project manager</option>
                                    <option>QA</option>
                                    <option>Normal Officers</option>
                                </select>
                                </div>

                
                      <div class="form-group">
                        <label>Salary Group</label>
                        <select class="form-control select2" name="sal_grp" style="width: 100%;">
                          
                            @foreach ($sal_grps as $sal_grp)
                            <option>{{$sal_grp->name}}</option>
                            @endforeach
                        </select>
                        </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Create Account</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<footer class="main-footer">

  