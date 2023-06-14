<!DOCTYPE html>
<html>
<h1>Менеджеры</h1>
<div class="col-12">
<div class="card">

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Имя</th>

</tr>
</thead>
<tbody>
    @foreach($data as $manager)
<tr>
<td>{{$manager->id}}</td>
<td>{{$manager->Manager_name}}</td>
    @endforeach
</tr>
</tbody>
</table>
</div>

</div>

</div>

<p>Панель менеджеров</p>
</html>