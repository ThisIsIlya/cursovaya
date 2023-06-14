@extends('layouts.main')

@section('content')
<h1>Фабрики</h1>
<div class="col-12">
<div class="card">
<div class="card-header">
    <a href="{{route('factory.create')}}" class="btn btn primary">Добавить</a>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Название</th>

</tr>
</thead>
<tbody>
    @foreach($factories as $factory)
<tr>
<td>{{$factory->id}}</td>
<td> <a href="{{ route('factory.show', $factory->id) }}"> {{$factory->Factory_name}}</a></td>
    @endforeach
</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель Заводов</p>
@endsection