@extends('base-layout')
@section('content')
  <div class="welcome-container" layout="column" layout-align="center center" ng-controller="HomeController as vm">
    <h2 class="text-center md-title">Enter token to give your feedback</h2>
    <form action="/" method="post" name="vm.tokenForm">
      <md-card class="enter-token-card">
        {{ csrf_field() }}
        <md-card-content>
          <div layout="column" flex>
            <md-input-container>
              <input type="text" placeholder="Enter your token here" ng-model="vm.token" name="token" required />
            </md-input-container>
          </div>
          <div layout="column" layout-align="center stretch">
            <md-button type="submit" class="md-primary md-raised" ng-disabled="vm.shouldFormBeDisabled()">Proceed</md-button>
          </div>
        </md-card-content>
      </md-card>
    </form>
  </div>
@stop
