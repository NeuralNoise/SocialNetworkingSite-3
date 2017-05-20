@extends('layouts.master')

@section('content')
	<div class="container" style="margin-top: 10%;">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 border2px bg-login" style="padding-top: 20px; padding-bottom: 20px;">
				<form action="{{url('add')}}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" name="username" class="form-control" required placeholder="Username"><br>
						<input type="email" name="email" class="form-control" required placeholder="Email"><br>
						<input type="password" name="password" class="form-control" required placeholder="Password"><br>
						<button type="submit" class="btn btn-success col-md-12 column form">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection