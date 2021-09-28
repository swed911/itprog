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
            <form<a href="{{ route('tasks.destroy', $data->id )}}"><button class="btn btn-danger">Удалить</button></a>
        </div>
    @if (session('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="col-sm-12">
            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
            </div>
        </div>
    @endif
@endsection

