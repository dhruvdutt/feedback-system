@extends('base-layout')
@section('content')
<div class="container flex-center-container">
	<div class="row">
		<h5 style="margin-left:1rem !important">Admin panel</h5>
		<div class="col m3">
			<div class="collection">
				<a href="/admin/dashboard" class="collection-item">
					Home
				</a>
				<a href="/admin/settings/feedback" class="collection-item">
					Feedback
				</a>
				<a href="/admin/settings/import" class="collection-item">
					Importing Data
				</a>
				<a href="/admin/settings/program-course-term" class="collection-item">
					Program Course Term
				</a>
				<a href="/admin/settings/answer" class="collection-item">
					Answer Types
				</a>
				<a href="/admin/settings/fixed-question" class="collection-item">
					Fixed Questions
				</a>
				<a href="/admin/settings/custom-question" class="collection-item">
					Custom Questions
				</a>
				<a href="/admin/settings/fixed-question-option" class="collection-item">
					Fixed Questions Options
				</a>
				<a href="/admin/logout" class="collection-item">
					Logout
				</a>
			</div>
		</div>
		<div class="col m9">
			<div class="card">
				<div class="card-content">
					@yield('admin-content')
				</div>
			</div>
		</div>
	</div>
</div>
@stop
