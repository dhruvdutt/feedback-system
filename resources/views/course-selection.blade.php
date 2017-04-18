@extends('base-layout')
@section('content')
  <div class="course-selection-container container">
    <form action="/course-selection" method="post">
      {{ csrf_field() }}
      <h4 class="text-center">Select your courses</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4>Core</h4>
              @foreach($core as $c)
								<div class="checkbox">
				          <label>
				            <input type="checkbox" name="courses[]" value="{{$c}}"> {{$c}}
				          </label>
				        </div>
              @endforeach
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4>Electives</h4>
              @foreach($electives as $e)
								<div class="checkbox">
				          <label>
				            <input type="checkbox" name="courses[]" value="{{$e}}"> {{$e}}
				          </label>
				        </div>
              @endforeach
						</div>
					</div>
				</div>
			</div>
      <div class="text-center">
        <button class="btn btn-primary">Proceed</button>
      </div>
    </form>
  </div>
@stop
