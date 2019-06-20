@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="users-tables-group">
            @foreach ($users as $user)
            <div class="table-users-row">
                <div class="table-user">
                    <div class="table-header-blue clearfix">
                        <span class="right">
                             <a href="" class=" action" style="color: white">Редагувати оголошення</a>
                              <a href="" class="action" style="color: white; padding-left: 20px;">Видалити</a>
                        </span>
                    </div>
                    <div class="table-user-body clearfix">
                        <table class="user-details">
                            <tbody>
                            <tr>
                                <td>Ім'я</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Електронний адрес</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Контактний телефон</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop