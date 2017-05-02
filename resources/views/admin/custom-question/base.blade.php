@extends('admin.base')
@section('admin-content')
<div class="right-align">
	 <button data-target="add-custom-question-modal" class="btn">Add</button>
</div>
<div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Question</th>
				<th>Course</th>
				<th>Term</th>
				<th>Answer type</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>What is your rating for the subject?</td>
				<td>Computer Networks</td>
				<td>Autum</td>
				<td>Text</td>
			</tr>
		</tbody>
	</table>
</div>
<div id="add-custom-question-modal" class="modal">
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
				      <option disabled selected>Choose term</option>
							<option value="radio">Autum</option>
				      <option value="radio">Winter</option>
				      <option value="checkbox">Summer</option>
				    </select>
				    <label>For term</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m12">
				    <select name="answer_type">
				      <option disabled selected>Choose course</option>
							<option value="radio">Computer Networks</option>
				      <option value="radio">Design of Software systems</option>
				    </select>
				    <label>For course</label>
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
