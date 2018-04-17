@extends('admin.layouts.index')
@section('content') 
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User 
                    <small>Sửa</small>
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
                <form action="admin/users/sua/{{$users ->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>User name</label>
                        <input class="form-control" name="usersname" value="{{$users ->username}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>Pass word</label>
                        <input class="form-control" name="pass" placeholder="Nhập pass word" required="" />
                    </div>
                    <div class="form-group">
                        <label>Full name</label>
                        <input class="form-control" name="full_name" value=" {{$users ->fullname}}"required="" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="{{$users ->email}}" required="" />
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
                    <button type="submit" class="btn btn-default">Sửa</button>
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