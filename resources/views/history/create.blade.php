@extends('layouts.main')

@section('content')
<h1>История</h1>
<form action="{{route('history.store')}}" method="post">
        @csrf
        <div class="form-group">
        <input type="text" name="History_task" class="form-control" placeholder="Заказ">
            <input type="text" name="History_status" class="form-control" placeholder="Статус">
            <input type="text" name="History_date" class="form-control" placeholder="Дата">
            <select name="factory_id" class="form-control" placeholder="Выбор завода" id="factory_id">
            @foreach($factories as $factory)
            <option value="{{ $factory->id }}">{{ $factory->Factory_name }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>
<p>Панель истории</p>
@endsection