@extends('base-layout')
@section('content')
<div class="container flex-center-container">
	<div class="row">
		<div class="col m4 offset-m4">
			<h4 class="center-align">Sign in to continue</h4>
			<div class="card">
				<div class="card-content">
					<form action="/admin/login" method="post">
						<div class="form-group">
							<input type="text" name="username" placeholder="User name" />
						</div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Password" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary full-width-button">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
