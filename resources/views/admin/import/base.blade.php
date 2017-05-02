@extends('admin.base')
@section('admin-content')
    <form method="post" action="/admin/settings/import">
        <input type="file" name="file" id="file"/>
        <input type="submit" value="Upload"/>
    </form>
@stop
