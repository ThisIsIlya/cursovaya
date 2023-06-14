@extends('layouts.main')

@section('content')
<h1>Клиенты</h1>
<div class="col-12">
<div class="card">
<div class="card-header d-flex p-3">
    <div class="mr-3">
        <a href="{{route('client.edit', $client->id)}}" class="btn btn primary">Редактировать</a>
    </div>
    <form action="{{route('client.delete', $client->id)}}" method="post">
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
<td> {{$client->id}}</td>

</tr>
<tr>
<td>Имя</td>
<td> {{$client->client_fio}}</td>

</tr>

<tr>
<td>Почта</td>
<td> {{$client->client_email}}</td>

</tr>

<tr>
<td>Адрес</td>
<td> {{$client->client_address}}</td>

</tr>
<tr>
<td>Номер телефона</td>
<td> {{$client->client_phonenumber}}</td>

</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель пользователей</p>
@endsection
