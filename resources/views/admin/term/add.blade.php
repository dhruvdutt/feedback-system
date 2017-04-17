@extends('admin.base')
@section('admin-content')

    <div ng-controller="TermController as vm">
        <md-card>
            <md-card-content>
                <div layout="column" layout-padding>
                    <h2>Term Add</h2>
                    <form method="post" action="/admin/settings/term">
                        {{ csrf_field() }}
                        <div flex="grow" layout="row">
                            <md-input-container flex="50">
                                <label>Term ID</label>
                                <input type="number" name="term_id">
                            </md-input-container>
                        </div>
                        <div flex="grow" layout="row">
                            <md-input-container flex="50">
                                <label>Term Name</label>
                                <input type="text" name="term_name">
                            </md-input-container>
                        </div>
                        <div flex="grow" layout="row">
                            <md-input-container flex="50">
                                <label>Year</label>
                                <input type="text" name="year_name">
                            </md-input-container>
                        </div>
                        <div flex="grow" layout="row">
                            <md-button type="submit" class="md-raised md-primary" flex="50">Add Term</md-button>
                        </div>
                    </form>
                </div>
            </md-card-content>
        </md-card>
    </div>
@stop
