@extends('layouts.main')

@section('content')

<h1>Фабрики</h1>

<p>Редактирование фабрик</p>
<form action="{{route('factory.update', $factory->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="text" name="Factory_name" value="{{$factory->Factory_name}}" class="form-control" placeholder="Название">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Изменить">
        </div>
    </form>
<p>Панель Заводов</p>
@endsection