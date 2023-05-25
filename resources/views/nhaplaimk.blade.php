

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
                    <img src="https://assets.topdev.vn/images/2020/09/17/LogoAMWhitebackground-VaMrC.jpg" class="mx-auto d-block" width="170px"  alt="">
                </div>
            </div>
            <div class="row p-5">
            <form action="/action_page.php" class="p-5 pt-0 ">
                <div class="mb-3 mt-3 ">
                    <label for="name" class="form-label">Mật Khẩu*:</label>
                    <input type="name"  class="form-control"  id="name" placeholder="Name" name="name">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Nhập lại Mật Khẩu*:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">
                </div>
                <button type="submit" class="btn btn-warning mx-auto">Xác Nhận</button>
            </form>
            </div>
        </div>
        <div class="col-md-7 p-0 img">
            <img src="https://avante.biz/wp-content/uploads/Hinh-Nen-Dep-Wallpapers/Hinh-Nen-Dep-Wallpapers-044.jpg" class="w-100" alt="">
        </div>
    </div>
</div>

@endsection






