@extends('admin.base')
@section('admin-content')
<div ng-controller="FixedQuestionController as vm">
	<div class="right-align">
		<button ng-click='vm.toggleAddQuestion()' class="btn">Add</button>
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
					<td ng-if='!question.isEditable'><% question.question %></td>
					<td ng-if='question.isEditable'>
						<input type="text" ng-model='question.question' />
					</td>
					<td ng-if='!question.isEditable'><% question.answerType %></td>
					<td ng-if='question.isEditable'>
						<p>
						 	<input name="question.id" ng-model='question.type' type="radio" id="test1" />
							<label for="test1">Radio</label>
						</p>
						<p>
						 	<input name="question.id" ng-model='question.type' type="radio" id="test1" />
							<label for="test1">Note</label>
						</p>
						<div class="input-field">
					    <select>
					      <option value="" disabled selected>Choose your option</option>
					      <option value="1">Radio</option>
					      <option value="2">Text</option>
					    </select>
					    <label>Question type</label>
					  </div>
					</td>
					<td>
						<p>
							<input id="lecture" type="checkbox" ng-model="question.lecture" ng-disabled='!question.isEditable'>
							<label for="lecture"></label>
						</p>
					</td>
					<td>
						<p>
							<input id="lab" type="checkbox" ng-model="question.lab" ng-disabled='!question.isEditable'>
							<label for="lab"></label>
						</p>
					</td>
					<td>
						<p>
							<input id="tutorial" type="checkbox" ng-model="question.tutorial" ng-disabled='!question.isEditable'>
							<label for="tutorial"></label>
						</p>
					</td>
					<td>
						<i class="material-icons" ng-click='vm.toggleEditable(question)' ng-if='!question.isEditable'>mode_edit</i>
						<i class="material-icons" ng-click='vm.addUpdateQuestion(question)' ng-if='question.isEditable'>done</i>
						<i class="material-icons" ng-click='vm.toggleEditable(question)' ng-if='question.isEditable'>cancel</i>
					</td>
				</tr>

				<!-- Add question row -->
				<tr ng-if='vm.addQuestionEnabled'>
					<td>#</td>
					<td>
						<input type="text" ng-model='question.question' />
					</td>
					<td>
						<div class="input-field">
					    <select>
					      <option value="" disabled selected>Choose your option</option>
					      <option value="1">Radio</option>
					      <option value="2">Text</option>
					    </select>
					    <label>Question type</label>
					  </div>
					</td>
					<td>
						<input id="lecture" type="checkbox" ng-model="vm.question.lecture" />
						<label for="lecture"></label>
					</td>
					<td>
						<input id="lab" type="checkbox" ng-model="vm.question.lab" />
						<label for="lab"></label>
					</td>
					<td>
						<input id="tutorial" type="checkbox" ng-model="vm.question.tutorial" />
						<label for="tutorial"></label>
					</td>
					<td>
						<i class="material-icons" ng-click='vm.addUpdateQuestion()'>done</i>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
</div>

<div id="add-fixed-question-modal" class="modal">
	<form action="/admin/settings/answer" method="post">
	  <div class="modal-content">
				<div class="row">
					<div class="col m12">
						<label for="question">Question</label>
						<input id="question" type="text" name="question" placeholder="What is your rating for the subject?">
					</div>
				</div>
				<div class="row">
					<div class="input-field col m12">
				    <select name="answer_type">
				      <option disabled selected>Choose your option</option>
				      <option value="radio">Radio</option>
				      <option value="checkbox">Checkbox</option>
				      <option value="text">Text</option>
				    </select>
				    <label>Answer type</label>
					</div>
				</div>
	  </div>
	  <div class="modal-footer">
	    <button type="submit" class="waves-effect waves-green btn-flat">Add</a>
	  </div>
	</form>
</div>
@stop
