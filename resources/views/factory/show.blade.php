@extends('layouts.main')

@section('content')
<h1>Фабрики</h1>
<div class="col-12">
<div class="card">
<div class="card-header d-flex p-3">
    <div class="mr-3">
        <a href="{{route('factory.edit', $factory->id)}}" class="btn btn primary">Редактировать</a>
    </div>
    <form action="{{route('factory.delete', $factory->id)}}" method="post">
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
<td> {{$factory->id}}</td>

</tr>
<tr>
<td>Имя</td>
<td> {{$factory->Factory_name}}</td>

</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель Заводов</p>
@endsection