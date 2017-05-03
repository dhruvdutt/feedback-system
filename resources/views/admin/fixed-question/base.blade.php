@extends('admin.base')
@section('admin-content')

<div ng-controller='FixedQuestionController as vm'>
	<div layout="row" layout-align="end end">
		<md-button class="md-raised" ng-click='vm.openAddUpdateQuestionModal()'>Add</md-button>
	</div>
	<div layout="column">
		<span class="md-headline">Fixed questions</span>
		<md-card>
			<md-card-content>
				<md-table-container>
					<table md-table ng-model="vm.selected" md-progress="vm.promise">
						<thead md-head>
							<tr md-row>
								<th md-column md-numeric>#</th>
								<th md-column>Question</th>
								<th md-column>Answer type</th>
								<th md-column>Lecture</th>
								<th md-column>Lab</th>
								<th md-column>Tutorial</th>
							</tr>
						</thead>
						<tbody md-body>
							<tr md-row ng-repeat="question in vm.questions track by question.i_question_id">
								<td md-cell><% $index + 1 %></td>
								<td md-cell><% question.question %></td>
								<td md-cell><% question.answer_type %></td>
								<td md-cell>
									<span ng-if='question.lec'>
										<i class="material-icons">done</i>
									</span>
									<span ng-if='!question.lec'>
										<i class="material-icons">close</i>
									</span>
								</td>
								<td md-cell>
									<span ng-if='question.labs'>
										<i class="material-icons">done</i>
									</span>
									<span ng-if='!question.labs'>
										<i class="material-icons">close</i>
									</span>
								</td>
								<td md-cell>
									<span ng-if='question.tut'>
										<i class="material-icons">done</i>
									</span>
									<span ng-if='!question.tut'>
										<i class="material-icons">close</i>
									</span>
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
</div>

@stop
