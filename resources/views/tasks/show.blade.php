@extends('layout')
@section('title'){{ $data->title }}@endsection
@section('main_content')
    <h1>{{ $data->title }}</h1>
            <div class="alert alert-info">
            <p>{{ $data->description }}</p>
            <p>{{ $data->author }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('tasks.index') }}"><button class="btn btn-warning">Вернуться к списку</button></a>
            <a href="{{ route('tasks.edit', $data->id )}}"><button class="btn btn-warning">Редактировать</button></a>
        </div>
@endsection

