@extends('layouts.main')

@section('content')
<h1>Каталог</h1>

<p>Редактирование каталога</p>
<form action="{{route('cathalog.update', $cathalog->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="text" name="Catalog_price" value="{{$cathalog->Catalog_price}}" class="form-control" placeholder="Цена">
            <input type="text" name="Catalog_matherial" value="{{$cathalog->Catalog_matherial}}" class="form-control" placeholder="Материал">
            <input type="text" name="Catalog_type" value="{{$cathalog->Catalog_type}}" class="form-control" placeholder="Тип">
            <input type="text" name="Catalog_size" value="{{$cathalog->Catalog_size}}" class="form-control" placeholder="Размер">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Редактировать">
        </div>
    </form>
<p>Панель менеджеров</p>
@endsection