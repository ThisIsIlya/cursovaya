@extends('layouts.main')

@section('content')
<h1>Клиенты</h1>

<p>Редактирование пользователей</p>

<form action="{{route('client.update', $client->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
        <input type="text" name="name" value="{{$client->client_fio}}" class="form-control" placeholder="Имя">
            <input type="text" name="email" value="{{$client->client_email}}" class="form-control" placeholder="Почта">
            <input type="text" name="address" value="{{$client->client_address}}" class="form-control" placeholder="Адрес">
            <input type="text" name="phonenumber" value="{{$client->client_phonenumber}}" class="form-control" placeholder="Номер телефона">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Редактировать">
        </div>
    </form>
@endsection