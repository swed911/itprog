@extends('layout')
@section('title')Редактирование задачи@endsection
@section('main_content')
    <h1>Редактирование задачи</h1>
    <div id="form_container">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            @method('POST')
            <div>
                <p>Заполните, пожалуйста, поля:</p>
            </div>
            <div class="form-group">
                    <label for="title">Название</label>
                    <input id="title" value="{{ $data->title }}" name="title" class="form-control" type="text">
            </div>


            <div class="form-group">
                <label for="description">Описание</label>
                <input id="description" value="{{ $data->description }}" name="description" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label for="author">Автор</label>
                <input id="author" value="{{ $data->author }}" name="author" class="form-control" type="text">
            </div>

            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
    </div>
@endsection
