@extends('admin.base')
@section('admin-content')

<div ng-controller='FixedOptionController as vm'>
	<div layout="row" layout-align="end end">
		<md-button class="md-raised" ng-click='vm.openAddUpdateOptionModal()'>Add</md-button>
	</div>
	<div layout="column">
		<span class="md-headline">Fixed options</span>
		<md-card>
			<md-card-content>
				<md-table-container>
					<table md-table ng-model="vm.selected" md-progress="vm.promise">
						<thead md-head>
							<tr md-row>
								<th md-column md-numeric>#</th>
								<th md-column>Option</th>
								<th md-column>Is available</th>
							</tr>
						</thead>
						<tbody md-body>
							<tr md-row ng-repeat="option in vm.options track by option.option_id">
								<td md-cell><% $index + 1 %></td>
								<td md-cell><% option.option %></td>
								<td md-cell>
									<span ng-if='option.available'>
										<i class="material-icons">done</i>
									</span>
									<span ng-if='!option.available'>
										<i class="material-icons">close</i>
									</span>
								</td>
								<td md-cell>
									<md-button class="md-icon-button" ng-click="vm.openAddUpdateOptionModal(option)">
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
