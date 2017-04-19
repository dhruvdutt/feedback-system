@extends('base-layout')
@section('content')
<div class="container-fluid flex-center-container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h4 class="text-center">Sign in to continue</h4>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="/admin/login" method="post">
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="User name" />
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
