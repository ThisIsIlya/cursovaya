@extends('layouts.main')

@section('content')
<h1>Пользователи</h1>
    <form action="{{route('client.store')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="client_fio" class="form-control" placeholder="Имя">
            <input type="text" name="client_email" class="form-control" placeholder="Почта">
            <input type="text" name="client_address" class="form-control" placeholder="Адрес">
            <input type="text" name="client_phonenumber" class="form-control" placeholder="Номер телефона">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>
<p>Создание пользователей</p>
@endsection