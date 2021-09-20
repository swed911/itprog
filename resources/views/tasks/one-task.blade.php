@extends('layout')
@section('title'){{ $data->title }}@endsection
@section('main_content')
    <h1>{{ $data->title }}</h1>
            <div class="alert alert-info">
            <p>{{ $data->description }}</p>
            <p>{{ $data->author }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('one-task', $data->id) }}>>"><button class="btn btn-warning">Детальнее</button></a>
        </div>
@endsection

