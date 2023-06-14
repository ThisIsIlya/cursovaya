@extends('layouts.main')

@section('content')
<h1>Менеджеры</h1>
<div class="col-12">
<div class="card">
<div class="card-header d-flex p-3">
    <div class="mr-3">
        <a href="{{route('manager.edit', $manager->id)}}" class="btn btn primary">Редактировать</a>
    </div>
    <form action="{{route('manager.delete', $manager->id)}}" method="post">
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
<td> {{$manager->id}}</td>

</tr>
<tr>
<td>Имя</td>
<td> {{$manager->Manager_name}}</td>

</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель менеджеров</p>
@endsection
