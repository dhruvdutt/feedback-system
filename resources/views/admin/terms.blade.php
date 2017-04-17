@extends('admin.base')
@section('admin-content')

<div ng-controller="TermController as vm">
  <md-card>
    <md-card-content>
      <md-table-container>
        <table md-table>
          <thead md-head>
            <tr md-row>
              <th md-column md-numeric><span>Term ID</span></th>
              <th md-column><span>Term name</span></th>
            </tr>
          </thead>
          <tbody md-body>
            @foreach ($terms as $term)
              <tr md-row>
                <td md-cell>{{ $term->term_id }}</td>
                <td md-cell>{{ $term->term_name }}</td>
                <td md-cell>{{ $term->year_name }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </md-table-container>
    </md-card-content>
  </md-card>
</div>
@stop
