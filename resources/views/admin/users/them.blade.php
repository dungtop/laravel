@extends('admin.layouts.index')
@section('content') 
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors ->all() as $er)
                        {{$er}} <br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                <div class=" alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <form action="admin/users/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>User name</label>
                        <input class="form-control" name="usersname" placeholder="Nhập User name" required="" />
                    </div>
                    <div class="form-group">
                        <label>Pass word</label>
                        <input class="form-control" name="pass" placeholder="Nhập mật khẩu" required="" />
                    </div>
                    <div class="form-group">
                        <label>Full name</label>
                        <input class="form-control" name="full_name" placeholder="Nhập tên đầy đủ"required="" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="Nhập User name" required="" />
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <label class="radio-inline">
                            <input name="level" value="0" checked="" type="radio">Thành viên
                        </label>
                        <label class="radio-inline">
                            <input name="level" value="1" type="radio">Admin
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Hủy</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection