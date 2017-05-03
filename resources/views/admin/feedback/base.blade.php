@extends('admin.base')
@section('admin-content')

<div ng-controller='FeedbackController as vm'>
	<div layout="row" layout-align="end end">
		<md-button class="md-raised" ng-click='vm.openAddUpdateFeedbackModal()'>Add</md-button>
	</div>
	<div layout="column">
		<span class="md-headline">Currently active</span>
		<md-card>
			<md-card-content>
				<md-table-container>
					<table md-table ng-model="vm.selected" md-progress="vm.promise">
						<thead md-head md-order="vm.query.order">
							<tr md-row>
								<th md-column md-numeric>#</th>
								<th md-column>Name</th>
								<th md-column>Start date</th>
								<th md-column>End date</th>
								<th md-column>Active</th>
								<th md-column>Actions</th>
							</tr>
						</thead>
						<tbody md-body>
							<tr md-row ng-repeat="feedback in vm.active track by feedback.feedback_id">
								<td md-cell><% $index + 1 %></td>
								<td md-cell><% feedback.feedback_name %></td>
								<td md-cell><% feedback.start_date %></td>
								<td md-cell><% feedback.end_date %></td>
								<td md-cell>
									<md-switch ng-model="feedback.start" aria-label="Finished?" ng-change='vm.toggleFeedbackActive(feedback)'></md-switch>
								</td>
								<td md-cell>
									<md-button class="md-icon-button" ng-click="vm.openAddUpdateFeedbackModal(feedback)">
										<i class="material-icons">edit</i>
									</md-button>
								</td>
							</tr>
						</tbody>
					</table>
				</md-table-container>
			</md-card-content>
		</md-card>
	</div>
	<br>
	<div layout="column">
		<span class="md-headline">Recently active</span>
		<md-card>
			<md-card-content>
				<md-table-container>
					<table md-table ng-model="vm.selected" md-progress="vm.promise">
						<thead md-head md-order="vm.query.order">
							<tr md-row>
								<th md-column md-numeric>#</th>
								<th md-column>Name</th>
								<th md-column>Start date</th>
								<th md-column>End date</th>
								<th md-column>Actions</th>
							</tr>
						</thead>
						<tbody md-body>
							<tr md-row ng-repeat="feedback in vm.recent track by feedback.feedback_id">
								<td md-cell><% $index + 1 %></td>
								<td md-cell><% feedback.feedback_name %></td>
								<td md-cell><% feedback.start_date %></td>
								<td md-cell><% feedback.end_date %></td>
								<td md-cell>
									<md-button class="md-icon-button">
										<i class="material-icons">edit</i>
									</md-button>
								</td>
							</tr>
						</tbody>
					</table>
				</md-table-container>
			</md-card-content>
		</md-card>
	</div>
</div>

@stop
