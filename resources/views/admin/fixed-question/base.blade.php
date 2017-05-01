@extends('admin.base')
@section('admin-content')
<div class="right-align" ng-controller="TermController as vm">
	 <button data-target="add-fixed-question-modal" class="btn">Add</button>
</div>
<div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Question</th>
				<th>Type</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>What is your rating for the subject?</td>
				<td>Radio</td>
			</tr>
		</tbody>
	</table>
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
