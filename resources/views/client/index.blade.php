@extends('layouts.main')

@section('content')
<h1>Пользователи</h1>
<div class="col-12">
<div class="card">
<div class="card-header">
    <a href="{{route('client.create')}}" class="btn btn primary">Добавить</a>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Имя</th>
<th>Почта</th>
<th>Адрес</th>
<th>Номер телефона</th>

</tr>
</thead>
<tbody>
    @foreach($clients as $client)
<tr>
<td>{{$client->id}}</td>
<td> <a href="{{ route('client.show', $client->id) }}"> {{$client->client_fio}}</a></td>

<td>{{$client->client_email}}</td>

<td>{{$client->client_address}}</td>
<td>{{$client->client_phonenumber}}</td>
</tr>
    @endforeach

</tbody>
</table>
</div>

</div>

</div>
<p>Панель пользователей</p>
@endsection