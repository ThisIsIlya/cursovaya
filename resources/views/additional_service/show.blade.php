@extends('layouts.main')

@section('content')
<h1>Дополнительные услуги</h1>
<div class="col-12">
<div class="card">
<div class="card-header d-flex p-3">
    <div class="mr-3">
        <a href="{{route('additional_service.edit', $additional_service->id)}}" class="btn btn primary">Редактировать</a>
    </div>
    <form action="{{route('additional_service.delete', $additional_service->id)}}" method="post">
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
<td> {{$additional_service->id}}</td>

</tr>
<tr>
<td>Имя</td>
<td> {{$additional_service->AS_name}}</td>

</tr>
<tr>
<td>Цена</td>
<td> {{$additional_service->AS_price}}</td>

</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Допы</p>
@endsection