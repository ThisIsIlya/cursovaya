@extends('layouts.main')

@section('content')
<h1>Фабрики</h1>
<form action="{{route('factory.store')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="Factory_name" class="form-control" placeholder="Название">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>
<p>Панель Заводов</p>
@endsection