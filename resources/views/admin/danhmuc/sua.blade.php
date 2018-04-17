@extends('admin.layouts.index')
@section('content') 
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục
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
                <form action="admin/danhmuc/sua/{{$danhmuc->id}}" method="POST">
                     <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input class="form-control" name="ten_danhmuc" placeholder="Nhập tên danh mục" required="" / value="{{$danhmuc->ten_danhmuc}}">
                    </div>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <input class="form-control" name="theloai" placeholder="Chọn thể loại" required=""  value="{{$danhmuc->theloai_id}}"/>
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