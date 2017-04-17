@extends('admin.base')
@section('admin-content')

<div ng-controller="TermController as vm">
  <md-card>
    <md-card-content>
      <a href="/admin/settings/term/create">
        <md-button class="md-primary md-raised">
          Add Term
        </md-button>
      </a>
      <md-table-container>
        <table md-table>
          <thead md-head>
            <tr md-row>
              <th md-column md-numeric><span>Term ID</span></th>
              <th md-column><span>Term Name</span></th>
              <th md-column><span>Year Name</span></th>
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
