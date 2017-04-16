@extends('base-layout')
@section('content')
  <div layout="row" layout-padding>
    <div flex>
      <form class="" action="/feedback" method="post">
        {{ csrf_field() }}
        <h1 class="text-center">Computer Networks</h1>
        <md-card>
          <md-card-title>
            <md-card-title-text>
              <span class="md-headline">What is your rating for the subject?</span>
            </md-card-title-text>
          </md-card-title>
          <md-card-content>
            <md-radio-group ng-model="data.group1" layout="row">
              <md-radio-button value="Apple" class="md-primary">0</md-radio-button>
              <md-radio-button value="Banana">1</md-radio-button>
              <md-radio-button value="Mango">2</md-radio-button>
              <md-radio-button value="Mango">3</md-radio-button>
            </md-radio-group>
          </md-card-content>
        </md-card>
        <div layout="row" layout-align="end end">
          <md-button type="submit">
            <md-icon>arrow_forward</md-icon>
            Next
          </md-button>
        </div>
      </form>
    </div>
  </div>
@stop
