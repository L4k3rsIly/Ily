@extends('layouts.main')
@section('content')
    <div class="container" style="padding-top: 20px">
        <div>
            <form method="post" action=" ">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-auto my-1" >
                        <label class="mr-sm-2" for="type_object">Тип об'єкта</label>
                        <select class="custom-select mr-sm-2" id="type_object" name = "type_object">
                            <option selected></option>
                            <option value="flat">Квартира</option>
                            <option value="house">Особняк</option>
                        </select>

                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-md-4 col-form-label text-md-right"> Додати зображення</label>
                        <div class="col-md-6">
                            <input id="photo" type="file"  name="photo" >
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col"{{ $errors->has('type_object') ? ' has-error' : '' }} >
                        <label for="price">Ціна</label>
                        <input type="text" class="form-control" name ="price" id="price" placeholder="Вкажіть ціну" value="{{old('price')}}" >
                        @if ($errors->has('price'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('price') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        <label class="mr-sm-2" for="type_price" >Тип валюти</label>
                        <select class="custom-select mr-sm-2" name="type_price" id="type_price">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="row" style="padding-top: 30px;">
                    <div class="col">
                        <label class = "form-group"  style="padding-right: 30px">Вказати тип стін </label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="type_wall" name="type_wall" value="panel" class="custom-control-input">
                            <label class="custom-control-label" for="type_wall">Панель</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="type_wall1" name="type_wall" value="brick" class="custom-control-input">
                            <label class="custom-control-label" for="type_wall1">Цегла</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group" {{ $errors->has('type_object') ? ' has-error' : '' }}>
                            <label for="number_rooms" >Кількісь кімнат</label>
                            <input type="text" name="number_rooms" class="form-control" id="number_rooms" placeholder="Ведіть кількість кімнат" style="float: right; width: 250px" value="{{old('number_rooms')}}">
                            @if ($errors->has('number_rooms'))
                                <div class="text-danger">
                                    <strong>{{ $errors->first('number_rooms') }}
                                    </strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="user_id">Ім'я</label>
                        <select class="custom-select mr-sm-2" name="user_id" id="user_id">
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                        @if ($errors->has('phone'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('phone') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="status" value="{{App\Models\Offer::REMEMBER_FALSE}}">
                        <input type="checkbox" name="status" value="{{App\Models\Offer::REMEMBER_TRUE}}" id="status">
                        <label for="remember">Запамятати мане</label>
                    </div>
                    <button type="submite" class="btn btn-primary">Опублікувати</button>
                </div>
            </form>
        </div>
      </div>
    </div>
@stop