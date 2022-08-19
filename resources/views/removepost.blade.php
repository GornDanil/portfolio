@extends('layouts.app')

@section('title-block') Портфолио @endsection

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br><br><br><br>
    <form action="/remove/{{$data->id}}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        @if (count($errors) > 0)
            <ul><li>{{ $error }}</li></ul>
        @endif
        Product name: <br>
        <input name="title" type="text" value="{{$data->title}}">
        <input name="task" type="text" value="{{$data->task}}">
        <textarea name="description_col_1" id="">{{$data->description_col_1}}</textarea>
        <textarea name="description_col_2" id="">{{$data->description_col_2}}</textarea>
        <br><br>
        Product photos (can attach more than one): <br>
        <input multiple name="intro" type="file">
        <input multiple name="images[]" type="file">
        <br><br>
        <input type="submit" value="Go"><br>
        <input name="delete" type="submit" value="DELETE">
    </form>
@endsection
