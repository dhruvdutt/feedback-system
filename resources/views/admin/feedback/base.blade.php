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
				<th>Start Date</th>
				<th>End Date</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>20/04/2017</td>
				<td>30/04/2017</td>
			</tr>
		</tbody>
	</table>
</div>
<div id="modal1" class="modal">
	<form action="/admin/settings/answer" method="post">
	  <div class="modal-content">
				<div class="row">
					<div class="col m12">
						<label for="start_date">Start date</label>
						 <input id="start_date" type="date" class="datepicker">
					</div>
				</div>
				<div class="row">
					<div class="col m12">
						<label for="end_date">End date</label>
						 <input id="end_date" type="date" class="datepicker">
					</div>
				</div>
	  </div>
	  <div class="modal-footer">
	    <button type="submit" class="waves-effect waves-green btn-flat">Add</a>
	  </div>
	</form>
</div>
@stop
