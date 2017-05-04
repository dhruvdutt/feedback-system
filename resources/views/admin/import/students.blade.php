@extends('admin.base')
@section('admin-content')
    <form method="post" action="/api/admin/import/students">
        <input type="file" name="file" id="file"/>
        <input type="submit" value="Upload"/>
    </form>
@stop
