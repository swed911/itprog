@extends('layout')
@section('title')Загрузить изображение@endsection

@section('main_content')
  <div class="container">
   <h1>Добавить изображение</h1>
       <form method="post" action="{{route('image.upload')}}" enctype="multipart/form-data">
           {{ csrf_field() }}
           <div class="form-group">
               <input type="file" name="image">
           </div>

        <button type="submit"class="btn btn-success">Отправить</button>
    </form>
      @isset($path)
          <img class="img-fluid" src="{{ asset('/storage/' . $path) }}" alt="">
      @endisset

  </div>
@endsection

