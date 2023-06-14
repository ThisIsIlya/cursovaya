@extends('layouts.main')

@section('content')
<h1>Заказы</h1>
    <form action="{{route('task.store')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="Task_date_of_manufacturing" class="form-control" placeholder="Срок изготовления">
            <input type="text" name="Task_date_of_issue" class="form-control" placeholder="Дата оформления">
            <input type="text" name="Task_price" class="form-control" placeholder="Цена">
            <input type="text" name="Task_status" class="form-control" placeholder="Статус оплаты">
            <input type="text" name="Task_date_of_order" class="form-control" placeholder="Дата выдачи">
            <select name="manager_id" class="form-control" placeholder="Выбор менеджера" id="manager_id">
            @foreach($managers as $manager)
            <option value="{{ $manager->id }}">{{ $manager->Manager_name }}</option>
            @endforeach
            </select>
            <select name="client_id" class="form-control" placeholder="Выбор клиента" id="client_id">
            @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ $client->client_fio }}</option>
            @endforeach
            </select>
            <select name="cathalog_id" class="form-control" placeholder="Выбор типа каталога" id="cathalog_id">
            @foreach($cathalogs as $cathalog)
            <option value="{{ $cathalog->id }}">{{ $cathalog->Catalog_type }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-light" value="Добавить">
        </div>
    </form>
<p>Создание заказа</p>
@endsection