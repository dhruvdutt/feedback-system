@extends('admin.base')
@section('admin-content')

    <div ng-controller="TermController as vm">
        <md-card>
            <md-card-content>
                <div layout="column" layout-padding>
                    <h2>Program Add</h2>
                    <form method="post" action="/admin/settings/program">
                        {{ csrf_field() }}
                        <div flex="grow" layout="row">
                            <md-input-container flex="50">
                                <label>Program ID</label>
                                <input type="text" name="program_id">
                            </md-input-container>
                        </div>
                        <div flex="grow" layout="row">
                            <md-input-container flex="50">
                                <label>Program Name</label>
                                <input type="text" name="program_name">
                            </md-input-container>
                        </div>
                        <div flex="grow" layout="row">
                            <md-button type="submit" class="md-raised md-primary" flex="50">Add Program</md-button>
                        </div>
                    </form>
                </div>
            </md-card-content>
        </md-card>
    </div>
@stop
