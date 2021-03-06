@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin địa điểm
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
             @endif
             
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Tóm tắt</th>
                        <th>Thể loại</th>
                        <th>Loại địa điểm</th>
                        <th>Lượt xem</th>
                        <th>Hot</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ttmonan as $tt)
                        <tr class="odd gradeX" align="center">
                            <td>{{$tt->id}}</td>
                            <td>
                                <p>{{$tt->TieuDe}}</p>
                                <img width="200px" height="200px" src="public/upload/ttmonan/{{$tt->Hinh}}" />
                            </td>
                            <td>{{$tt->TomTat}}</td>
                            <td>{{$tt->loaidiadiem->theloai->Ten}}</td>
                            <td>{{$tt->loaidiadiem->Ten}}</td>
                            <td>{{$tt->SoLuotXem}}</td>
                            <td>
                                @if($tt->NoiBat == 0)
                                {{'không'}}
                                @else
                                {{'có'}}
                                @endif
                            </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/ttmonan/xoa/{{$tt->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/ttmonan/sua/{{$tt->id}}">Edit</a></td>
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