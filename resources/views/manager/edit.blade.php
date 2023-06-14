@extends('layouts.main')

@section('content')
<h1>Менеджеры</h1>

<p>Редактирование менеджеров</p>

<form action="{{route('manager.update', $manager->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="text" name="Manager_name" value="{{$manager->Manager_name}}" class="form-control" placeholder="Имя">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Редактировать">
        </div>
    </form>
@endsection