@extends('base-layout')
@section('content')
<div class="container" style="padding-top: 2rem">
	<div class="row">
		<div class="col m2">
			<ul id="slide-out" class="side-nav fixed">
				<li>
					<a href="/admin/settings/feedback" class="collection-item">Feedback</a>
				</li>
				<li>
					<a href="/admin/settings/import" class="collection-item">
						Importing Data
					</a>
				</li>
				<li>
					<a href="/admin/settings/program-course-term" class="collection-item">Program Course Term</a>
				</li>
				<li>
					<a href="/admin/settings/fixed-question" class="collection-item">Fixed Questions</a>
				</li>
				<li>
					<a href="/admin/settings/custom-question" class="collection-item">Custom Questions</a>
				</li>
				<li>
					<a href="/admin/settings/fixed-question-option" class="collection-item">Fixed Questions Options</a>
				</li>
				<li>
					<a href="/admin/logout" class="collection-item">Logout</a>
				</li>
			</ul>
		</div>
		<div class="col m10">
			@yield('admin-content')
		</div>
	</div>
</div>
@stop
