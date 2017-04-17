@extends('admin.base')
@section('admin-content')

<div ng-controller="TermController as vm">
  <md-card>
    <md-card-content>
      <a href="/admin/settings/program/create">
        <md-button class="md-primary md-raised">
          Add Program
        </md-button>
      </a>
      <md-table-container>
        <table md-table>
          <thead md-head>
            <tr md-row>
              <th md-column md-numeric><span>Program ID</span></th>
              <th md-column><span>Program Name</span></th>
            </tr>
          </thead>
          <tbody md-body>
            @foreach ($programs as $program)
              <tr md-row>
                <td md-cell>{{ $program->program_id }}</td>
                <td md-cell>{{ $program->program_name }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </md-table-container>
    </md-card-content>
  </md-card>
</div>
@stop
