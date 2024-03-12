@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Admin ma'lumotlarini tahrirlash</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Voy!</strong>Kiritishda xatolik mavjud<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.users.update',$user)}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="name">Ism</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="{{$user->name}}">
                    </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{$user->email}}">
                        </div>
                    <div class="form-group">
                        <label for="pwd">Parol</label>
                        <input type="password" name="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="pwd_confirm">Parolni takrorlash</label>
                        <input type="password" name="password_confirmation" class="form-control" id="pwd_confirm">
                    </div>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                    <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
