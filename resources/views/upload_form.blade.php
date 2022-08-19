@extends('layouts.app')

@section('title-block') Главная страница @endsection

@section('content')
<form action="/upload" method="post" enctype="multipart/form-data" >
{{ csrf_field() }}
@if (count($errors) > 0)
<ul><li>{{ $error }}</li></ul>
@endif
    <br><br><br><br><br><br><br><br>
<h3>Заголовок</h3><br>
<input name="title" type="text"><br>
    <h3>Задача</h3><br>
    <textarea name="task"></textarea><br>
    <h3>Левая колонка</h3><br>
    <textarea name="description_col_1" id=""></textarea><br>
    <h3>Правая колонка</h3><br>
    <textarea name="description_col_2" id=""></textarea>
<br><br>
    <h3>Превью для главной</h3><br> <br>
    <input multiple name="intro" type="file"><br>
    <h3>Превью для страницы работы</h3><br>
    <input multiple name="images[]" type="file"><br>
<br><br>
<input type="submit" value="Go"><br>
</form>
@endsection
