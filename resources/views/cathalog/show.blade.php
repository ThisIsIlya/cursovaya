@extends('layouts.main')

@section('content')
<h1>Каталог</h1>
<div class="col-12">
<div class="card">
<div class="card-header d-flex p-3">
    <div class="mr-3">
        <a href="{{route('cathalog.edit', $cathalog->id)}}" class="btn btn primary">Редактировать</a>
    </div>
    <form action="{{route('cathalog.delete', $cathalog->id)}}" method="post">
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
<td> {{$cathalog->id}}</td>

</tr>
<tr>
<td>Имя</td>
<td> {{$cathalog->Catalog_price}}</td>

</tr>
<tr>
<td>Имя</td>
<td> {{$cathalog->Catalog_matherial}}</td>

</tr>
<tr>
<td>Имя</td>
<td> {{$cathalog->Catalog_type}}</td>

</tr>
<tr>
<td>Имя</td>
<td> {{$cathalog->Catalog_size}}</td>

</tr>
</tbody>
</table>
</div>

</div>

</div>
<p>Панель каталога</p>
@endsection