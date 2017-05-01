@extends('base-layout')
@section('content')
  <div class="course-selection-container container">
    <form action="/course-selection" method="post">
      {{ csrf_field() }}
      <h4 class="center-align">Select your courses</h4>
			<div class="row">
				<div class="col m6">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Core</span>
							<br>
              @foreach($coreCourses as $c)
								<p>
						      <input type="checkbox" name="courses[]" id="{{$c->course_id}}" value="{{$c->course_id}}" checked />
						      <label for="{{$c->course_id}}">{{$c->course_name}}</label>
						    </p>
              @endforeach
						</div>
					</div>
				</div>
				<div class="col m6">
					<div class="card">
						<div class="card-content">
							<span class="card-title">Electives</span>
							<br>
              @foreach($electiveCourses as $e)
								<p>
									<input type="checkbox" name="courses[]" id="{{$e->course_id}}" value="{{$e->course_id}}" />
									<label for="{{$e->course_id}}">{{$e->course_name}}</label>
								</p>
              @endforeach
						</div>
					</div>
				</div>
			</div>
      <div class="center-align">
        <button class="btn btn-primary">Proceed</button>
      </div>
    </form>
  </div>
@stop
