@extends('admin.base')
@section('admin-content')

<div ng-controller="TermController as vm">
		<md-card>
				<md-card-content>
						<div layout="column" layout-padding>
								<h2>Add Program Course Term</h2>
								<form method="post" action="/admin/settings/programCourse">
										{{ csrf_field() }}
										<div flex="grow" layout="row">
												<md-input-container flex="50">
														<label>Program</label>
														<md-select ng-model="" name="program_id">
															<md-option><em>None</em></md-option>
															@foreach($programs as $program)
																<md-option ng-value="{{ $program }}">
																	{{ $program->program_name }}
																</md-option>
															@endforeach
														</md-select>
												</md-input-container>
										</div>
										<div flex="grow" layout="row">
												<md-button type="submit" class="md-raised md-primary" flex="50">Add</md-button>
										</div>
								</form>
						</div>
				</md-card-content>
		</md-card>
</div>
@stop
