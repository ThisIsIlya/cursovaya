@extends('layouts.main')

@section('content')
<h1>Дополнительные услуги</h1>
<div class="col-12">
<div class="card">
<div class="card-header">
    <a href="{{route('additional_service.create')}}" class="btn btn primary">Добавить</a>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Название</th>
<th>Цена</th>

</tr>
</thead>
<tbody>
    @foreach($additional_services as $additional_service)
<tr>
<td>{{$additional_service->id}}</td>
<td> <a href="{{ route('additional_service.show', $additional_service->id) }}"> {{$additional_service->AS_name}}</a></td>
<td>{{$additional_service->AS_price}}</td>
    @endforeach
</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Допы</p>
@endsection