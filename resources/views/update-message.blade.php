@extends('layouts.app')
@section('title')Контакты@endsection
@section('content')<h1>Контакты</h1>

    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>


@endsection