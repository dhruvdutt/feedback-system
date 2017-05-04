@extends('base-layout')
@section('content')
	<div class="welcome-container" layout="column" layout-align="center center" ng-controller="HomeController as vm">
		<h4 class="text-center">Enter token to give your feedback</h4>
		<div layout="row">
			<md-card flex class="welcome-card">
				<md-card-content>
					<form name="vm.tokenForm">
						<div layout="column" layout-align='stretch center'>
							<md-input-container>
								<input type="text" placeholder="Enter token here" ng-model="vm.token" required />
							</md-input-container>
						</div>
						<div layout="column" layout="stretch start">
							<md-button class="md-primary md-raised" ng-click="vm.postToken()">Proceed</md-button>
						</div>
					</form>
				</md-card-content>
			</md-card>
		</div>
	</div>
@stop
