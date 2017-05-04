@extends('base-layout')
@section('content')
  <div class="course-selection-container" ng-controller='CourseSelectionController as vm'>
		<div layout="row" layout-align="center center">
			<h3 class="md-title">Select courses for which you want to give feedback</h3>
		</div>
    <div layout="row" layout-align="start center" layout-padding>
			<div layout="column" flex="50">
				<h4 class="md-subtitle">Core</h4>
				<md-card>
					<md-card-content>
						<div layout="row" ng-repeat='c in vm.core track by $index'>
							<md-checkbox ng-model="vm.courseSelection" aria-label="Lecture" flex>
								<% c.course_name %>
							</md-checkbox>
						</div>
					</md-card-content>
				</md-card>
			</div>
			<div layout="column" flex="50">
				<h4 class="md-subtitle">Electives</h4>
				<md-card>
					<md-card-content>
						<md-checkbox ng-repeat='elective in vm.electives track by $index' ng-model="vm.courseSelection" aria-label="Lecture" flex>
							<% elective.course_name %>
						</md-checkbox>
					</md-card-content>
				</md-card>
			</div>
    </div>
		<div layout="row" layout-align="center center">
			<md-button>Proceed</md-button>
		</div>
  </div>
@stop
