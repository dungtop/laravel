@extends('admin.layouts.index')
@section('content') 
<!-- Page Content -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể loại
                    <small>Thêm</small>
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
                <form action="admin/theloai/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                     <div class="form-group">
                        <label>Tên thể loại</label>
                        <input class="form-control" name="ten" placeholder="Nhập tên thể loại" />
                    </div>
                    <div class="form-group">
                                <label>Chọn ảnh</label>
                                <input type="file" name="image" required="" >
                    </div>
                    
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Hủy</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection