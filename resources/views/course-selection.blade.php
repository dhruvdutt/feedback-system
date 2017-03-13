@extends('base-layout')
@section('content')
  <div class="course-selection-container">
    <form action="/api/course-selection" method="post">
      <h2 class="text-center">Select your courses</h2>
      <md-layout md-gutter md-align="center">
        <md-layout md-flex="30" md-flex-small="100" md-column class="course-container">
          <md-card class="course-card">
            <h3>Core</h3>
            @foreach($core as $c)
            <md-checkbox name="courses[]" value="{{$c}}">{{$c}}</md-checkbox>
            @endforeach
          </md-card>
        </md-layout>
        <md-layout md-flex="30" md-flex-small="100" md-column class="course-container">
          <md-card class="course-card">
            <h3>Electives</h3>
            @foreach($electives as $e)
            <md-checkbox name="courses[]" value="{{$e}}" checked="false">{{$e}}</md-checkbox>
            @endforeach
          </md-card>
        </md-layout>
      </md-layout>
      <md-layout md-flex="30" md-align="center">
        <md-button type="submit">
          <md-icon>arrow_forward</md-icon>
          Proceed
        </md-button>
      </md-layout>
    </form>
  </div>
@stop
