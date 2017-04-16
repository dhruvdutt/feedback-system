@extends('base-layout')
@section('content')
  <div class="course-selection-container">
    <form action="/api/course-selection" method="post">
      {{ csrf_field() }}
      <h2 class="text-center md-title">Select your courses</h2>
      <div layout="row" layout-xs="column">
        <div layout="column" flex="50" flex-xs="100">
          <md-card>
            <md-card-content>
              <h3 class="md-subtitle">Code</h3>
              @foreach($core as $c)
                <div layout="row">
                  <md-checkbox name="courses[]" value="{{$c}}" flex>{{$c}}</md-checkbox>
                </div>
              @endforeach
            </md-card-content>
          </md-card>
        </div>
        <div layout="column" flex="50" flex-xs="100">
          <md-card>
            <md-card-content>
              <h3 class="md-subtitle">Electives</h3>
              @foreach($electives as $e)
                <div layout="row">
                  <md-checkbox name="courses[]" value="{{$e}}" checked="false" flex>{{$e}}</md-checkbox>
                </div>
              @endforeach
            </md-card-content>
          </md-card>
        </div>
      </div>
      <div layout="row" layout-align="center stretch">
          <md-button type="submit">
            <md-icon>arrow_forward</md-icon>
            Proceed
          </md-button>
      </div>
    </form>
  </div>
@stop
