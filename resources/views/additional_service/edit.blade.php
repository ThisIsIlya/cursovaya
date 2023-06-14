@extends('layouts.main')

@section('content')
<h1>Дополнительные услуги</h1>
<form action="{{route('additional_service.update', $additional_service->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="text" name="AS_name" value="{{$additional_service->AS_name}}" class="form-control" placeholder="Название">
            <input type="text" name="AS_price" value="{{$additional_service->AS_price}}" class="form-control" placeholder="Цена">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Изменить">
        </div>
    </form>
<p>Допы</p>
@endsection