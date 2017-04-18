@extends('base-layout')
@section('content')
  <div class="welcome-container container" ng-controller="HomeController as vm">
    <h4 class="text-center">Enter token to give your feedback</h4>
    <form action="/" method="post" name="vm.tokenForm">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="form-group">
								<label for="token">Enter token</label>
								<input id="token" class="form-control" type="text" name="token" ng-model="vm.token" name="token" required />
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Proceed</button>
							</div>
						</div>
					</div>
				</div>
			</div>
    </form>
  </div>
@stop
