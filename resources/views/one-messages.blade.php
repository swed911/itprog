@extends('layouts.app')

@section('title'){{$data->subject}}@endsection

@section('content')
    <h1>{{$data->subject}}</h1>
        <div class="alert alert-info">
            <p>{{ $data->name }}</p>
            <p>{{ $data->email }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('contact-update', $data->id) }}"<button class="btn btn-primary">Редактировать</button>></a>
            <a href="{{ route('contact-delete', $data->id) }}"<button class="btn btn-danger">Удалить</button>></a>

        </div>
@endsection

