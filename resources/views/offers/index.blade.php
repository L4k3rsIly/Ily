@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="users-tables-group">
            @foreach($offers as $offer)
                <div class="table-users-row">
                    <div class="table-user">
                        <div class="table-header-blue clearfix">
                        <span class="right">
                            @if (Auth::user() && Auth::user()->id == $offer->user_id)
                            <a href="{{route('offer.edit', $offer)}}" class=" action" >Редагувати оголошення</a>
                            <a href="" class="action">Видалити</a>
                            @endif
                        </span>
                        </div>
                        <div class="avatar-block">
                            <img src="/image/">
                        </div>
                        <div class="tale-user-body clearfix">
                            <table class="user-details">
                                <tbody>
                                <tr>
                                    <td>Тип об'єкта</td>
                                    <td>{{$offer->type_object}}</td>
                                </tr>
                                <tr>
                                    <td>Ціна</td>
                                    <td>{{$offer->price}}</td>
                                    <td style="font-weight: bold;"></td>
                                </tr>
                                <tr>
                                    <td>Вказати тип стін</td>
                                    <td>{{$offer->type_wall}}</td>
                                </tr>
                                <tr>
                                    <td>Кількісь кімнат</td>
                                    <td>{{$offer->number_rooms}}</td>
                                </tr>
                                <tr>
                                    <td >Ім'я користувача</td>
                                    @foreach ($users as $user)
                                    <td style="">
                                        @if($offer['user_id'] == $user->id)
                                            {{$user->name}}
                                        @endif
                                    </td>
                                    @endforeach

                                </tr>
                                <tr>
                                    <td>Телефон</td>
                                    <td>{{$offer->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Збереження даних</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Додаткова інформація</td>
                                    <td>{{$offer->information}}</td>
                                </tr>
                                <tr>
                                    <td>Запам'ятати мене</td>
                                    <td>{{$offer->status}}</td>
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