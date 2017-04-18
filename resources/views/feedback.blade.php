@extends('base-layout')
@section('content')
  <div class="container">
		<uib-tabset active="active">
			@foreach(json_decode($fixedQuestions) as $q)
				<uib-tab index="0" heading="Static title">{{$q->question}}</uib-tab>
			@endforeach
		</uib-tabset>
  </div>
@stop
