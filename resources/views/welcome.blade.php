@extends('base-layout')
@section('content')
	<!-- <div class="welcome-container" layout="column" layout-align="center center" ng-controller="HomeController as vm">
		<h4 class="text-center">Enter token to give your feedback</h4>
		<div layout="row">
			<md-card flex>
				<md-card-content>
					<form name="vm.tokenForm">
						<div layout="row" flex>
							<md-input-container>
								<input type="text" placeholder="Enter token here" ng-model="vm.token" name="token" required>
							</md-input-container>
						</div>
						<div layout="row" layout="stretch start">
							<md-button flex class="md-primary md-raised" ng-click="vm.postToken()">Proceed</md-button>
						</div>
					</form>
				</md-card-content>
			</md-card>
		</div>
	</div> -->

	<div class="welcome-container" ng-controller="HomeController as vm">
    <h5 class="center-align">Enter token to give your feedback</h5>
    <form action="/" method="post" name="vm.tokenForm">
			{{ csrf_field() }}
			<div class="row">
				<div class="col m4 col offset-m4">
					<div class="card">
						<div class="card-content">
							<div class="form-group">
								<label for="token">Enter token</label>
								<input id="token" class="form-control" type="text" name="token" ng-model="vm.token" name="token" required />
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary full-width-button">Proceed</button>
							</div>
						</div>
					</div>
				</div>
			</div>
    </form>
  </div>
@stop
