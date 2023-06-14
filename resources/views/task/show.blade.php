@extends('layouts.main')

@section('content')
<h1>Заказы</h1>
<div class="col-12">
<div class="card">
<div class="card-header d-flex p-3">
    <div class="mr-3">
        <a href="{{route('task.edit', $task->id)}}" class="btn btn primary">Редактировать</a>
    </div>
    <form action="{{route('task.delete', $task->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">

<tbody>

<tr>
<td>ID</td>
<td> {{$task->id}}</td>

</tr>
<tr>
<td>Срок изготовления</td>
<td> {{$task->Task_date_of_manufacturing}}</td>

</tr>
<tr>
<td>Дата оформления</td>
<td> {{$task->Task_date_of_issue}}</td>

</tr>
<tr>
<td>Цена</td>
<td> {{$task->Task_price}}</td>

</tr>
<tr>
<td>Статус оплаты</td>
<td> {{$task->Task_status}}</td>

</tr>
<tr>
<td>Дата выдачи</td>
<td> {{$task->Task_date_of_order}}</td>

</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель заказов</p>
@endsection
