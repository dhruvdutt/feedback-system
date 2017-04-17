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
            <tr md-row>
              <td md-cell>1</td>
              <td md-cell>Autum</td>
            </tr>
            <tr md-row>
              <td md-cell>2</td>
              <td md-cell>Winter</td>
            </tr>
            <tr md-row>
              <td md-cell>3</td>
              <td md-cell>Summer</td>
            </tr>
          </tbody>
        </table>
      </md-table-container>
    </md-card-content>
  </md-card>
</div>
@stop
