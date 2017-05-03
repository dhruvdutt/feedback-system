@extends('base-layout')
@section('content')
<div layout="row">
	<md-sidenav class="md-sidenav-left" md-component-id="left" md-is-locked-open="$mdMedia('gt-md')" md-whiteframe="4">
		<md-list>
			<md-list-item ng-href="/admin/settings/feedback">
				<div class="md-list-item-text">Feedback</div>
			</md-list-item>
			<md-list-item ng-href="/admin/settings/feedback">
				<div class="md-list-item-text">Import data</div>
			</md-list-item>
			<md-list-item ng-href="/admin/settings/feedback">
				<div class="md-list-item-text">Program course term</div>
			</md-list-item>
			<md-list-item ng-href="/admin/settings/fixed-question">
				<div class="md-list-item-text">Fixed question</div>
			</md-list-item>
			<md-list-item ng-href="/admin/settings/custom-question">
				<div class="md-list-item-text">Custom question</div>
			</md-list-item>
			<md-list-item ng-href="/admin/settings/feedback">
				<div class="md-list-item-text">Fixed question option</div>
			</md-list-item>
			<md-list-item ng-href="/admin/settings/feedback">
				<div class="md-list-item-text">Logout</div>
			</md-list-item>
		</md-list>
	</md-sidenav>
	<md-content layout-padding class="full-width-container">
		@yield('admin-content')
	</md-content>
</div>

<!-- <div class="container" style="padding-top: 2rem">
	<div class="row">
		<md-button class="md-button">Button</md-button>
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
</div> -->
@stop
