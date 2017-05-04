@extends('admin.base')
@section('admin-content')
	<div class="flex-center-container" layout="column" layout-align="center center">
		<h4 class="md-title">Upload excel file here</h4>
		<form method="post" action="/api/admin/import/students" layout="row" layout-align="center center">
			<input type="file" name="file" id="file"/>
			<md-button type="submit" class="md-button md-raised">Upload</md-button>
		</form>
	</div>
@stop
