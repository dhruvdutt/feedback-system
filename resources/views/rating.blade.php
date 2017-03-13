@extends('base-layout')
@section('content')
  <div class="container rating-container text-center">
    <span class="md-display-1">On a scale of 0-4, how do you rate your experience of giving the feedback?</span>
    <form action="/rating" method="post">
      <md-layout md-align="center">
        <md-radio v-model="radio1" id="my-test1" name="my-test-group1" md-value="1">0 - Didn't like it at all</md-radio>
        <md-radio v-model="radio1" id="my-test1" name="my-test-group1" md-value="1">1 - Not the best</md-radio>
        <md-radio v-model="radio1" id="my-test1" name="my-test-group1" md-value="1">2 - Don't give a damn!</md-radio>
        <md-radio v-model="radio1" id="my-test1" name="my-test-group1" md-value="1">3 - Liked it</md-radio>
        <md-radio v-model="radio1" id="my-test1" name="my-test-group1" md-value="1">4 - The best!</md-radio>
      </md-layout>
      <md-button type="submit">
        <md-icon>arrow_forward</md-icon>
        Submit
      </md-button>
    </form>
  </div>
@stop
