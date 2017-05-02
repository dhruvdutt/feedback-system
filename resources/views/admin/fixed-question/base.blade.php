@extends('admin.base')
@section('admin-content')
<div ng-controller="FixedQuestionController as vm">
	<div class="right-align">
		<button data-target="add-fixed-question-modal" class="btn">Add</button>
	</div>
	<br>
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Question</th>
					<th>Type</th>
					<th>Lecture</th>
					<th>Lab</th>
					<th>Tutorial</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat='question in vm.questions track by question.id'>
					<td><% question.id %></td>
					<td><% question.question %></td>
					<td><% question.answerType %></td>
					<td>
						<p>
							<input id="lecture" type="checkbox" ng-model="question.lecture" disabled>
							<label for="lecture"></label>
						</p>
					</td>
					<td>
						<p>
							<input id="lab" type="checkbox" ng-model="question.lab" disabled>
							<label for="lab"></label>
						</p>
					</td>
					<td>
						<p>
							<input id="tutorial" type="checkbox" ng-model="question.tutorial" disabled>
							<label for="tutorial"></label>
						</p>
					</td>
					<td>
						<i class="material-icons" data-target="add-fixed-question-modal" ng-click='vm.setQuestionModel(question)' ng-if='!question.isEditable'>mode_edit</i>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Add/Update question modal -->
	<div id="add-fixed-question-modal" class="modal modal-fixed-footer">
		<form action="/admin/settings/answer" method="post">
			<div class="modal-content">
				<div class="row">
					<div class="col m12">
						<label for="question">Question</label>
						<input id="question" type="text" name="question" placeholder="What is your rating for the subject?" ng-model='vm.question.question' />
					</div>
				</div>
				<div class="row">
					<div class="input-field col m12">
						<select name="answer_type" ng-model='vm.question.answerType'>
							<option disabled selected>Choose your option</option>
							<option value="radio">Radio</option>
							<option value="checkbox">Checkbox</option>
							<option value="text">Text</option>
						</select>
						<label>Answer type</label>
					</div>
				</div>
				<div class="row">
					<div class="col m4">
						<p>
							<input id="lecture" type="checkbox" ng-model="vm.question.lecture" />
							<label for="lecture">Lecture</label>
						</p>
					</div>
					<div class="col m4">
						<p>
							<input id="lab" type="checkbox" ng-model="vm.question.lab" />
							<label for="lab">Lab</label>
						</p>
					</div>
					<div class="col m4">
						<p>
							<input id="tutorial" type="checkbox" ng-model="vm.question.tutorial" />
							<label for="tutorial">Tutorial</label>
						</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
					<button type="submit" class="waves-effect waves-green btn-flat">
						<span ng-if='vm.question.id'>Update</span>
						<span ng-if='!vm.question.id'>Add</span>
					</button>
				</div>
		</form>
	</div>
</div>

@stop
