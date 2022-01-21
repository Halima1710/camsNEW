   <!--header section start -->
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-sm-12 col-lg-3">
				    <div class="logo"><img src="{{url('frontend/images/logo.png')}}"></div>
			    </div>
			    <div class="col-sm-4 col-lg-5">
			    	<div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">


   
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                <a class="nav-link active" href="">Home<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="">About</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="">Company</a></li>
                               <li class="#" href="#">
                                   
                               <a class="nav-link" href="">Contact Us</a></li>
                                   
  <div class="btn-group">
  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Furnitures
  </button>
  <div class="dropdown-menu">
      @foreach($categories as $category)
    <a class="dropdown-item" href="">{{$category->name}}</a>
        @endforeach
    
  </div>
</div>
                                    
<div class="btn-group">
  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Services
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{route('website.pages.design')}}">Making</a>
    <a class="dropdown-item" href="{{route('website.pages.showrepairinglist')}}">Repairing</a>
    <div class="dropdown-divider"></div>
    
  </div>
</div>

                       </ul>
                        </div>
                    </nav>
                </div>
			    </div>
                
			    <div class="col-sm-8 col-lg-4">
			    	<div class="togle_3">
                  <div class="left_main">
                     <div class="menu_main">
                     @if(auth()->user())
                    <!-- Button trigger modal -->

                        <a href="{{route('user.logout')}}" class="btn btn-success">{{auth()->user()->name}} | Logout</a>

                        @else
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registration">
                                Register
                            </button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                                Login
                            </button>
                        @endif
                       
                     </div>
                  </div>
                  <div class="middle_main">
                     <div class="shoping_bag"><img src="{{url('frontend/images/search-icon.png')}}"></div>
                  </div>
                  <div class="right_main">
                     <div class="togle_main"><img src="{{url('frontend/images/shopping-bag.png')}}"></div>
                  </div>
                 </div>
			    </div>

		</div>
		</div>

        @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
    <!-- Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.registration')}}" method="post">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Enter User Name:</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter user name">
                </div>
                <div class="form-group">
                    <label for="">Enter User Email:</label>
                    <input name="email" type="email" class="form-control" placeholder="Enter user email">
                </div>
                <div class="form-group">
                    <label for="">Enter User Password:</label>
                    <input name="password" type="password" class="form-control" placeholder="Enter user password">
                </div>
                <div class="form-group">
                    <label for="">Enter User Mobile:</label>
                    <input name="mobile" type="text" class="form-control" placeholder="Enter user mobile">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Registration</button>
            </div>
        </div>
        </form>
    </div>
</div>




<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.login')}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Enter User Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter user email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Password:</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter user password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
