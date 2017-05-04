@extends('admin.base')
@section('admin-content')

<div ng-controller='CustomQuestionController as vm'>
	<div layout="row" layout-align="end end">
		<md-button class="md-raised" ng-click='vm.openAddUpdateQuestionModal()'>Add</md-button>
	</div>
	<div layout="column">
		<span class="md-headline">Custom questions</span>
		<md-card>
			<md-card-content>

				<div layout="row">
					<md-input-container flex>
						<label>Select course</label>
						<md-select ng-model='vm.course' ng-change='vm.getCourseQuestions()'>
							<md-option ng-repeat="course in vm.courses track by course.course_id" ng-value="course.course_id" ng-disabled="!vm.courses.length">
              	<% course.course_name %>
							</md-option>
						</md-select>
					</md-input-container>
				</div>

				<md-table-container>
					<table md-table ng-model="vm.selectedQuestions" md-progress="vm.promise">
						<thead md-head>
							<tr md-row>
								<th md-column md-numeric>#</th>
								<th md-column>Question</th>
								<th md-column>Answer type</th>
								<th md-column>Lecture</th>
								<th md-column>Lab</th>
								<th md-column>Tutorial</th>
								<th md-column>Available</th>
							</tr>
						</thead>
						<tbody md-body>
							<tr md-row ng-disabled='!vm.course' ng-repeat="question in vm.questions track by question.i_question_id">
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
									<span ng-if='question.isAvailable'>
										<i class="material-icons">done</i>
									</span>
									<span ng-if='!question.isAvailable'>
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
