@extends('admin.base')
@section('admin-content')

<div ng-controller="TermController as vm">
  <md-card>
    <md-card-content>
      <a href="/admin/settings/programCourse/create">
        <md-button class="md-primary md-raised">
          Add Program Course Term
        </md-button>
      </a>
      <md-table-container>
        <table md-table>
          <thead md-head>
            <tr md-row>
              <th md-column md-numeric><span>Program ID</span></th>
              <th md-column md-numeric><span>Course ID</span></th>
              <th md-column md-numeric><span>Term ID</span></th>
            </tr>
          </thead>
          <tbody md-body>
            @foreach ($list as $data)
              <tr md-row>
                <td md-cell>{{ $data->program_id }}</td>
                <td md-cell>{{ $data->course_id }}</td>
                <td md-cell>{{ $data->term_id }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </md-table-container>
    </md-card-content>
  </md-card>
</div>
@stop
