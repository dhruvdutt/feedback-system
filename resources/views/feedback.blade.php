@extends('base-layout')
@section('content')
  <div class="container feedback-container">
		<form action="/feedback" method="post">
			<div class="row">
				<div class="col s12">
					<ul class="tabs">
						@foreach($coreCourses as $indexKey => $coreCourse)
					 		<li class="tab col s3"><a href="#{{$coreCourse->course_id}}">{{$coreCourse->course_id}} {{$coreCourse->course_name}}</a></li>
						@endforeach
						@foreach($electiveCourses as $indexKey => $electiveCourse)
							<li class="tab col s3"><a href="#{{$electiveCourse->course_id}}">{{$electiveCourse->course_id}} {{$electiveCourse->course_name}}</a></li>
						@endforeach
					</ul>
				</div>

				<!-- Core courses -->
				@foreach($coreCourses as $indexKey => $coreCourse)
					<div id="{{$coreCourse->course_id}}" class="col s12">
						@foreach($fixedQuestions as $fixedQuestion)
							<h5>{{$fixedQuestion->question}}</h5>
							<div class="row">
								@foreach($fixedQuestionsOptions as $fixedQuestionsOption)
									<div class="col m3">
										<p>
											<input name="{{$coreCourse->course_id}}-{{$fixedQuestion->question_id}}" type="radio" value="{{$fixedQuestionsOption->option_id}}" id="{{$coreCourse->course_id}}-{{$fixedQuestion->question_id}}-{{$fixedQuestionsOption->option_id}}" />
											<label for="{{$coreCourse->course_id}}-{{$fixedQuestion->question_id}}-{{$fixedQuestionsOption->option_id}}">{{$fixedQuestionsOption->option}}</label>
										</p>
									</div>
								@endforeach
							</div>
						@endforeach

						@foreach($customQuestions as $customQuestion)
							@if($customQuestion->course_id === $coreCourse->course_id)
								<h5>{{$customQuestion->question}}</h5>
								<div class="row">
									@foreach($customQuestion->options as $option)
									<div class="col m3">
										<p>
											<input type="radio" name="{{$customQuestion->course_id}}-{{$customQuestion->question_id}}" value="{{$option->option_id}}" id="{{$customQuestion->course_id}}-{{$option->option}}">
											<label for="{{$customQuestion->course_id}}-{{$option->option}}">{{$option->option}}</label>
										</p>
									</div>
									@endforeach
								</div>
							@endif
						@endforeach
					</div>
				@endforeach

				<!-- Elective courses -->
				@foreach($electiveCourses as $indexKey => $electiveCourse)
					<div id="{{$electiveCourse->course_id}}" class="col s12">
						@foreach($fixedQuestions as $fixedQuestion)
							<h5>{{$fixedQuestion->question}}</h5>
							<div class="row">
								@foreach($fixedQuestionsOptions as $fixedQuestionsOption)
									<div class="col m3">
										<p>
											<input name="{{$electiveCourse->course_id}}-{{$fixedQuestion->question_id}}" type="radio" value="{{$fixedQuestionsOption->option_id}}" id="{{$electiveCourse->course_id}}-{{$fixedQuestion->question_id}}-{{$fixedQuestionsOption->option_id}}" />
											<label for="{{$electiveCourse->course_id}}-{{$fixedQuestion->question_id}}-{{$fixedQuestionsOption->option_id}}">{{$fixedQuestionsOption->option}}</label>
										</p>
									</div>
								@endforeach
							</div>
						@endforeach

						@foreach($customQuestions as $customQuestion)
							@if($customQuestion->course_id === $electiveCourse->course_id)
								<h5>{{$customQuestion->question}}</h5>
								<div class="row">
									@foreach($customQuestion->options as $option)
									<div class="col m3">
										<p>
											<input type="radio" name="{{$customQuestion->course_id}}-{{$customQuestion->question_id}}" value="{{$option->option_id}}" id="{{$customQuestion->course_id}}-{{$option->option}}">
											<label for="{{$customQuestion->course_id}}-{{$option->option}}">{{$option->option}}</label>
										</p>
									</div>
									@endforeach
								</div>
							@endif
						@endforeach
					</div>
				@endforeach
		 </div>
		 <button type="submit" class="btn btn-primary">Submit</button>
		</form>
  </div>
@stop
