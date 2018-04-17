@extends('admin.layouts.index')
@section('content') 
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            @if(count($errors)>0)
                    <div class="alert alert-danger">   
                        @foreach($errors->all() as $er)
                            {{$er}} <br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class=" alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên Danh mục</th>
                        <th>theloai_id</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhmuc as $dm)
                    <tr class="odd gradeX" align="center">
                        <td>{{$dm->id}}</td>
                        <td>{{$dm->ten_danhmuc}}</td>
                        <td>{{$dm->theloai_id}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/danhmuc/xoa/{{$dm->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/danhmuc/sua/{{$dm->id}}">Sửa</a></td>
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