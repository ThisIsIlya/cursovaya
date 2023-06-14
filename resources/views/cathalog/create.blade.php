@extends('layouts.main')

@section('content')
<h1>Каталог</h1>
<form action="{{route('cathalog.store')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="Catalog_price" class="form-control" placeholder="Цена">
            <input type="text" name="Catalog_matherial" class="form-control" placeholder="Материал">
            <input type="text" name="Catalog_type" class="form-control" placeholder="Тип">
            <input type="text" name="Catalog_size" class="form-control" placeholder="Размер">
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
<p>Панель каталога</p>
@endsection