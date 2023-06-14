@extends('layouts.main')

@section('content')
<h1>Дополнительные услуги</h1>
<form action="{{route('additional_service.store')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="AS_name" class="form-control" placeholder="Название">
            <input type="text" name="AS_price" class="form-control" placeholder="Цена">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>
<p>Допы</p>
@endsection