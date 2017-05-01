@extends('admin.base')
@section('admin-content')
<div class="pull-right" ng-controller="TermController as vm">
	<button type="button" class="btn btn-primary" ng-click="vm.openAddModal()">Add term</button>
</div>
<div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Term Id</th>
				<th>Term name</th>
				<th>Year name</th>
			</tr>
		</thead>
		<tbody>
			@foreach($terms as $term)
				<tr>
					<td>{{$term->term_id}}</td>
					<td>{{$term->term_name}}</td>
					<td>{{$term->year_name}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
