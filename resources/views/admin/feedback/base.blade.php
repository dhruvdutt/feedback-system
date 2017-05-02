@extends('admin.base')
@section('admin-content')
<div ng-controller="FeedbackController as vm">
	<div class="right-align">
		<button data-target="add-feedback-modal" class="btn">Add</button>
	</div>

	<br>

	<div>

		<h5>Currently active</h5>
		<ul class="collapsible" data-collapsible="accordion" ng-repeat='feedback in vm.feedbacks'>
			<li>
				<div class="collapsible-header"><% feedback.name %></div>
				<div class="collapsible-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Program</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Enabled</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat='program in feedback.programs'>
								<td><% program.name %></td>
								<td><% program.startDate %></td>
								<td><% program.endDate %></td>
								<td>
									<p>
										<input id="di" type="checkbox" ng-model="program.enabled" ng-change="vm.editFeedback(feedback)">
										<label for="di"></label>
									</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>
		</ul>

		<br>
		<h5>Recently active</h5>
		<ul class="collapsible" data-collapsible="accordion" ng-repeat='feedback in vm.feedbacks'>
			<li>
				<div class="collapsible-header"><% feedback.name %></div>
				<div class="collapsible-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Program</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat='program in feedback.programs'>
								<td><% program.name %></td>
								<td><% program.startDate %></td>
								<td><% program.endDate %></td>
								<td>
									<i class="material-icons">mode_edit</i>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>
		</ul>

	</div>
</div>

<div id="add-feedback-modal" class="modal modal-fixed-footer" ng-controller='AddFeedbackController as vm'>
	<form action="/admin/settings/answer" method="post">
	  <div class="modal-content">
				<div class="row">
					<div class="col m12">
						<label for="name">Name</label>
						 <input id="name" type="text" ng-model='vm.feedback.name' />
					</div>
				</div>
				<div class="row">
					<div class="col m12">
						<label for="name">Course</label>
						 <input id="name" type="text" ng-model='vm.feedback.course' />
					</div>
				</div>
				<div class="row" ng-repeat='program in vm.feedback.programs'>
					<div class="col m4">
						<label for="name">Name</label>
						<input id="name" type="text" ng-model='program.name' disabled />
					</div>
					<div class="col m4">
						<label for="start_date">Start date</label>
						 <input id="start_date" type="date" class="datepicker" ng-model='program.startDate' />
					</div>
					<div class="col m4">
						<label for="end_date">End date</label>
						<input id="end_date" type="date" class="datepicker" ng-model='program.endDate' />
					</div>
				</div>
	  </div>
	  <div class="modal-footer">
	    <button type="submit" class="waves-effect waves-green btn-flat">Add</a>
	  </div>
	</form>
</div>
@stop
