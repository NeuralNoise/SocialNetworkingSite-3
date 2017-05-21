<header>
	<nav class="navbar navbar-default">
	  	<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{ url('home') }}">Social Networking Site</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	
			    <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#login" role="button" aria-haspopup="true" aria-expanded="true">
			          <span class="glyphicon glyphicon-log-in"></span> Login</a>
			          <div id="login" class="modal fade" style="margin-top: 10%; margin-left: : 25%; role="dialog">
					      <div class="modal-dialog">

					        <!-- Modal content-->
					        <div class="modal-content">
					            <div class="col-lg-12 border2px bg-login" style="padding-top: 30px;">
					                <form action="{{ route('signin') }}" method="post">
					                    <div class="form-group">
					                        <label for="email">E-mail</label>
					                        <input class="form-control" type="text" name="email" id="email" required>
					                    </div>
					                    <div class="form-group">
					                        <label for="password">Password</label>
					                        <input class="form-control" type="password" name="password" id="password" required>
					                    </div>
					                    <button type="submit" class="btn btn-primary">Login</button>
					        			{{ csrf_field() }}
					                    <h6>Don't have an account? <a href="{{ url('register') }}" style="color : #005ce6">Sign up now!</a></h6>
					                </form>
					            </div>
					        </div>
					      </div>
					    </div>
			        </li>
	      		</ul>
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>
</header>