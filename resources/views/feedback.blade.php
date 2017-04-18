@extends('base-layout')
@section('content')
  <div class="container">
		<form action="/feedback" method="post">
			<uib-tabset active="active">
				@foreach($coreCourses[0] as $indexKey => $coreCourse)
				<uib-tab index="{{$indexKey}}" heading="{{$coreCourse->course_id}} {{$coreCourse->course_name}}">
					@foreach($fixedQuestions[0] as $fixedQuestion)
						<p class="lead">{{$fixedQuestion->question}}</p>
						<div class="form-group">
							<div class="radio">
								@foreach($fixedQuestionsOptions[0] as $fixedQuestionsOption)
								<label class="radio-inline">
									<input type="radio" name="{{$coreCourse->course_id}}-{{$fixedQuestion->question_id}}" value="{{$fixedQuestionsOption->option_id}}">
									{{$fixedQuestionsOption->option}}
								</label>
								@endforeach
							</div>
						</div>
					@endforeach
					@foreach($customQuestions[0] as $customQuestion)
						@if($customQuestion->course_id === $coreCourse->course_id)
							<p class="lead">{{$customQuestion->question}}</p>
						@endif
					@endforeach
				</uib-tab>
				@endforeach
				@foreach($electiveCourses[0] as $indexKey => $electiveCourse)
				<uib-tab index="{{count($coreCourses[0])+($indexKey)}}" heading="{{$electiveCourse->course_id}} {{$electiveCourse->course_name}}">
					@foreach($fixedQuestions[0] as $fixedQuestion)
					<p class="lead">{{$fixedQuestion->question}}</p>
					<div class="form-group">
						<div class="radio">
							@foreach($fixedQuestionsOptions[0] as $fixedQuestionsOption)
							<label class="radio-inline">
								<input type="radio" name="{{$electiveCourse->course_id}}-{{$fixedQuestion->question_id}}" value="{{$fixedQuestionsOption->option_id}}">
								{{$fixedQuestionsOption->option}}
							</label>
							@endforeach
						</div>
					</div>
					@endforeach
				</uib-tab>
				@endforeach
			</uib-tabset>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
  </div>
@stop
