@extends('layouts.main')

@section('content')
<h1>Менеджеры</h1>
<div class="col-12">
<div class="card">
<div class="card-header">
    <a href="{{route('manager.create')}}" class="btn btn primary">Добавить</a>
</div>


<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Имя</th>

</tr>
</thead>
<tbody>
    @foreach($managers as $manager)
<tr>
<td>{{$manager->id}}</td>
<td> <a href="{{ route('manager.show', $manager->id) }}"> {{$manager->Manager_name}}</a></td>
    @endforeach
</tr>
</tbody>
</table>
</div>

</div>

</div>

<p>Панель менеджеров</p>
@endsection