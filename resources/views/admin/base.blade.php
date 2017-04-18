@extends('base-layout')
@section('content')
<div class="container flex-center-container">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="/admin/terms" class="list-group-item active">
				  Terms
				</a>
				<a href="/admin/programs" class="list-group-item">
					Programs
				</a>
				<a href="/admin/courses" class="list-group-item">
					Courses
				</a>
				<a href="/admin/program-course-term" class="list-group-item">
					Program Course Term
				</a>
				<a href="/admin/answer-types" class="list-group-item">
					Answer Types
				</a>
				<a href="/admin/fixed-questions" class="list-group-item">
					Fixed Questions
				</a>
				<a href="/admin/fixed-question-options" class="list-group-item">
					Fixed Questions Options
				</a>
				<a href="/admin/custom-questions" class="list-group-item">
					Custom Questions
				</a>
				<a href="/admin/logout" class="list-group-item">
					Logout
				</a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panels panel-defaults">
				<div class="panel-bodys">
					@yield('admin-content')
				</div>
			</div>
		</div>
	</div>
</div>
@stop
