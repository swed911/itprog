@extends('layout')
@section('title')Добавление задачи@endsection
@section('main_content')
    <h1>Добавление задачи</h1>
    <div id="form_container">
        <form method="post" action="/tasks/store">
            @csrf
            <div>
                <p>Заполните, пожалуйста, поля:</p>
            </div>
            <div class = "form-group">
                    <label for="title">Название</label>
                    <input id= "title" name="title" class="form-control" type="text">
            </div>


            <div class = "form-group">
                <label for="description">Описание</label>
                <input id= "description" name="description" class="form-control" type="text">
            </div>

            <div class = "form-group">
                <label for="author">Автор</label>
                <input id= "author" name="author" class="form-control" type="text">
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
