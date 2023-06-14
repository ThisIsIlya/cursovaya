@extends('layouts.main')

@section('content')
<h1>История</h1>
<div class="col-12">
<div class="card">
<div class="card-header d-flex p-3">
    <div class="mr-3">
        <a href="{{route('history.edit', $history->id)}}" class="btn btn primary">Редактировать</a>
    </div>
    <form action="{{route('history.delete', $history->id)}}" method="post">
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
<td> {{$history->id}}</td>

</tr>
<tr>
<td>Заказ</td>
<td> {{$history->History_task}}</td>

</tr>
<tr>
<td>Статус</td>
<td> {{$history->History_status}}</td>

</tr>
<tr>
<td>Дата</td>
<td> {{$history->History_date}}</td>

</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель истории</p>
@endsection