@extends('layouts.main')

@section('content')
<h1>Менеджеры</h1>
    <form action="{{route('manager.store')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="Manager_name" class="form-control" placeholder="Имя">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>
<p>Создание менеджеров</p>
@endsection