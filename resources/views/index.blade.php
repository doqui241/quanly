
@extends('layuot')

<style>
    .dn{
height: 753px;
}
.img img{
height: 753px;
}

</style>
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 p-0  pt-5 bg-light dn ">
            <div class="row">
                <div class="col-md-12 p-0 mt-5 center-block">
                    <img src="{{ URL('img/logo.png')}}" class="mx-auto d-block" width="170px"  alt="">
                </div>
            </div>
            <div class="row p-5">
            <form action="{{route('login.store')}}" class="p-0 mx-auto d-block" style="width:400px;" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="username" class="form-label" >Tên Đăng Nhập*:</label>
                    <input type="username" class="form-control mx-auto d-block"   id="username" placeholder="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label" >Mật Khẩu*:</label>
                    <input type="password" class="form-control mx-auto d-block" id="pwd" placeholder="Password" name="password">
                </div>
                @include('alert')
                <div class=" mb-3"> 
                    <a href="{{route('login.create')}}"  class="btn p-0" >Quên Mật Khẩu ?</a>
                </div>
                <button type="submit" class="btn btn-warning mx-auto d-block">Đăng Nhập</button>
            </form>
            </div>
        </div>
        <div class="col-md-7 p-0 img">
            <img src="{{ URL('img/banner.jpg')}}" class="w-100" alt="">
        </div>
    </div>
</div>


@endsection
