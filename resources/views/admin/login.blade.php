@extends('base-layout')
@section('content')
<div class="flex-center-container" layout="column" layout-align="center center" ng-controller='LoginController as vm'>
	<h1 classs="md-display-1">Sign in to continue</h1>
	<md-card class="admin-login-card">
		<md-card-content layout="column">
			<div layout="column" layout-align="stretch center">
				<md-input-container>
					<label>Username</label>
					<input type="text" ng-model="vm.user.username" />
				</md-input-container>
			</div>
			<div layout="column" layout-align="stretch center">
				<md-input-container>
					<label>Password</label>
					<input type="password" ng-model="vm.user.password" />
				</md-input-container>
			</div>
			<div layout="column" layout-align="stretch center">
				<md-button ng-click='vm.login()' class="md-raised md-primary">Login</md-button>
			</div>
		</md-card-content>
	</md-card>
</div>
@stop
