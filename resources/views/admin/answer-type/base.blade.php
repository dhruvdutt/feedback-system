@extends('admin.base')
@section('admin-content')
<div class="right-align" ng-controller="TermController as vm">
	 <button data-target="modal1" class="btn">Add</button>
</div>
<div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Answer type</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $d)
				<tr>
					<td>{{$d->answer_type_id}}</td>
					<td>{{$d->answer_type}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div id="modal1" class="modal">
	<form action="/admin/settings/answer" method="post">
	  <div class="modal-content">
				<div class="row">
					<div class="col m12">
						<label for="answer_type">Answer type</label>
						<input id="answer_type" type="text" name="answer_type" placeholder="Radio, Checkbox, Text">
					</div>
				</div>
	  </div>
	  <div class="modal-footer">
	    <button type="submit" class="waves-effect waves-green btn-flat">Add</a>
	  </div>
	</form>
</div>
@stop
