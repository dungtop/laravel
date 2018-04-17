@extends('admin.layouts.index')
@section('content') 
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đăng tin
                    <small>Đồ dùng-vật dụng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Danh mục</th>
                        <th>Giá bán</th>
                        <th>Chi tiết</th>
                        <th>Số điện thoại</th>
                        <th>Người đăng</th>
                        <th>Ngày đăng</th>
                        <th>Ảnh</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dangtin as $dang)
                    <tr class="odd gradeX" align="center">
                        <td>{{$dang->matin}}</td>
                        <td>{{$dang->tieu_de}}</td>
                        <td>{{$dang->ten_danhmuc}}</td>
                        <td>{{$dang->gia_ban}}</td>
                        <td>{{$dang->chi_tiet}}</td>
                        <td>{{$dang->so_dien_thoai}}</td>
                        <td>{{$dang->username}}</td>
                        <td>{{$dang->ngay_dang}}</td>
                        <td><img src="upload/{{$dang->link_anh}}" style="height: 120px;width: 92px;"></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Sửa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection