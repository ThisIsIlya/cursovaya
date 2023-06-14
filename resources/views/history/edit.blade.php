@extends('layouts.main')

@section('content')
<h1>История</h1>

<p>Редактирование истории</p>
<form action="{{route('history.update', $history->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="text" name="History_task" value="{{$history->History_task}}" class="form-control" placeholder="Заказ">
            <input type="text" name="History_status" value="{{$history->History_status}}" class="form-control" placeholder="Статус">
            <input type="text" name="History_date" value="{{$history->History_date}}" class="form-control" placeholder="Дата">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Редактировать">
        </div>
    </form>
<p>Панель истории</p>
@endsection