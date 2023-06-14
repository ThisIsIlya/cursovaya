@extends('layouts.main')

@section('content')
<h1>Каталог</h1>
<div class="col-12">
<div class="card">
<div class="card-header">
    <a href="{{route('cathalog.create')}}" class="btn btn primary">Добавить</a>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Цена</th>
<th>Материал</th>
<th>Тип</th>
<th>Размер</th>

</tr>
</thead>
<tbody>
    @foreach($cathalogs as $cathalog)
<tr>
<td>{{$cathalog->id}}</td>
<td> <a href="{{ route('cathalog.show', $cathalog->id) }}"> {{$cathalog->Catalog_price}}</a></td>
<td>{{$cathalog->Catalog_matherial}}</td>
<td>{{$cathalog->Catalog_type}}</td>
<td>{{$cathalog->Catalog_size}}</td>
    @endforeach
</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель каталога</p>
@endsection