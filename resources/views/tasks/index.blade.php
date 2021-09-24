@extends('layout')
@section('title')Все задачи@endsection
@section('main_content')
    <h1>Список задач</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
            <h3>{{ $element->title }}</h3>
            <p>{{ $element->author }}</p>
            <p><small>{{ $element->created_at }}</small></p>
            <a href="{{ route('tasks.show', $element->id) }}"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection

