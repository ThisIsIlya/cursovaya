@extends('layouts.main')

@section('content')
<h1>История</h1>
<div class="col-12">
<div class="card">
<div class="card-header">
    <a href="{{route('history.create')}}" class="btn btn primary">Добавить</a>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Заказ</th>
<th>Статус</th>
<th>Дата</th>

</tr>
</thead>
<tbody>
    @foreach($histories as $history)
<tr>
<td>{{$history->id}}</td>
<td> <a href="{{ route('history.show', $history->id) }}"> {{$history->History_task}}</a></td>
<td>{{$history->History_status}}</td>
<td>{{$history->History_date}}</td>
    @endforeach
</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель истории</p>
@endsection