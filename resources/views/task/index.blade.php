@extends('layouts.main')

@section('content')
<h1>Заказы</h1>
<div class="col-12">
<div class="card">
<div class="card-header">
    <a href="{{route('task.create')}}" class="btn btn primary">Добавить</a>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Срок изготовления</th>
<th>Дата оформления</th>
<th>Цена</th>
<th>Статус оплаты</th>
<th>Дата выдачи</th>

</tr>
</thead>
<tbody>
    @foreach($tasks as $task)
<tr>
<td>{{$task->id}}</td>
<td> <a href="{{ route('task.show', $task->id) }}"> {{$task->Task_date_of_manufacturing}}</a></td>
<td>{{$task->Task_date_of_issue}}</td>
<td>{{$task->Task_price}}</td>
<td>{{$task->Task_status}}</td>
<td>{{$task->Task_date_of_order}}</td>
    @endforeach
</tr>

</tbody>
</table>
</div>

</div>

</div>
<p>Панель заказов</p>
@endsection