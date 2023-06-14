@extends('layouts.main')

@section('content')
<h1>Менеджеры</h1>

<p>Редактирование заказов</p>

<form action="{{route('task.update', $task->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="text" name="Task_date_of_manufacturing" value="{{$task->Task_date_of_manufacturing}}" class="form-control" placeholder="Срок изготовления">
            <input type="text" name="Task_date_of_issue" value="{{$task->Task_date_of_issue}}" class="form-control" placeholder="Дата оформления">
            <input type="text" name="Task_price" value="{{$task->Task_price}}" class="form-control" placeholder="Цена">
            <input type="text" name="Task_status" value="{{$task->Task_status}}" class="form-control" placeholder="Статус оплаты">
            <input type="text" name="Task_date_of_order" value="{{$task->Task_date_of_order}}" class="form-control" placeholder="Дата выдачи">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Редактировать">
        </div>
    </form>
@endsection