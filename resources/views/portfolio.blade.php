@extends('layouts.app')

@section('title-block') Портфолио @endsection

@section('content')
<div class="project-page">
    <div class="container">
        <h1 class="project-page_title">{{$data->title}}</h1>
        <p class="project-page_text">{{$data->task}}</p>
        <div class="project-page_text-row">
            <p class="project-page_text">{{$data->description_col_1}}</p>
            <p class="project-page_text">{{$data->description_col_2}}</p>
        </div>
        @foreach($data->images as $el)
            <img src="{{ asset('app/'.$el->filename) }}" alt="" class="project-img">
        @endforeach
    </div>



</div>
@endsection
