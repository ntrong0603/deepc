@extends('back_end.layout.index')
@section('title', 'Quản lý sản phẩm')
<!-- style -->
@section('include-style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('back-end/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('custom-style')
<style>
    .btn-app.btn-danger {
        color: #fff;
        background-color: #dd4b39;
        border-color: #d73925;
    }

    .btn-app.btn-danger:hover,
    .btn-app.btn-danger:active,
    .btn-app.btn-danger.hover {
        background-color: #d73925;
    }

    .btn-app.btn-primary {
        color: #fff;
        background-color: #3c8dbc;
        border-color: #367fa9;
    }

    .btn-app.btn-primary:hover,
    .btn-app.btn-primary:active,
    .btn-app.btn-primary.hover {
        background-color: #367fa9;
    }

    td {
        vertical-align: middle !important;
    }

    .active {
        color: green;
        font-weight: bold;
    }

    .no-active {
        color: red;
        font-weight: bold;
    }
</style>
@endsection
<!-- content-->
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Quản lý sản phẩm
        <small>Danh sách sản phẩm</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="./admin"><i class="fa fa-dashboard"></i>Trang chủ admin</a></li>
        <li><a href="{{ route('product') }}">Quản lý sản phẩm</a></li>
        <li class="active">Danh sách sản phẩm</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                {{-- <div class="box-header">
                    <a href="{{ route('product.edit') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div> --}}
                @if (session('thongbao'))
                <div class="alert alert-success">
                    {!! session('thongbao') !!}
                </div>
                @endif
                @if (session('loi'))
                <div class="alert alert-danger">
                    {{ session('loi') }}
                </div>
                @endif
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="" method="GET" class="product-sort">
                        <div class="product-sort_items">
                            <label for="">Tên sản phẩm:</label>
                        <input type="text" name="name" class="form-control" value="{{@$paramQuery['name']}}">
                        </div>
                        <div class="product-sort_items">
                            <label for="">Loại sản phẩm:</label>
                            <select name="type" class="form-control">
                                <option value=""></option>
                                <option value="0" @if (isset($paramQuery['type']) && $paramQuery['type']==0) selected
                                    @endif>Lô đất</option>
                                <option value="1" @if (isset($paramQuery['type']) && $paramQuery['type']==1) selected
                                    @endif>Nhà xưởng</option>
                            </select>
                        </div>
                        <div class="product-sort_items">
                            <label for="">Tình trạng:</label>
                            <select name="status" class="form-control">
                                <option value=""></option>
                                <option value="0" @if (isset($paramQuery['status']) && $paramQuery['status']==0)
                                    selected @endif>Còn trống</option>
                                <option value="1" @if (isset($paramQuery['status']) && $paramQuery['status']==1)
                                    selected @endif>Đang giữ chỗ</option>
                                <option value="2" @if (isset($paramQuery['status']) && $paramQuery['status']==2)
                                    selected @endif>Đã Cho thuê</option>
                            </select>
                        </div>
                        <div class="product-sort_items">
                            <label for=""></label>
                            <button type="submit" class="btn btn-primary" style="width: 50%; margin-bottom: -4px;">Tìm kiếm</button>
                        </div>
                    </form>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Lọai</th>
                                <th>view</th>
                                <th>tình trạng</th>
                                <th style="width: 200px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($listProduct->total() > 0)

                            @foreach ($listProduct as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{($product->type == 0) ? "Lô đất" : "Nhà xưởng"}}</td>
                                <td>{{$product->view}}</td>
                                <td>
                                    {{($product->status == 0) ? "Còn trống" : (($product->status == 1) ? "Đang giữ chỗ" : "Đã Cho thuê")}}
                                </td>
                                <td>
                                    <div>
                                        <a class="btn btn-app btn-primary"
                                            href="{{route("product.edit", ['id' => $product->id])}}"><i
                                                class="fa fa-edit"></i> Edit</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="9">Data not found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $listProduct->links('', ['type' => 0]) }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
<!--end content-->
<!-- js -->
@section('include-js')
<!-- DataTables -->
<script src="{{ asset('back-end/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('back-end/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
@endsection
@section('custom-js')
<script>
    // function searchProduct(){
    //     var type   = $("select[name = 'type']").val();
    //     var status = $("select[name = 'status']").val();
    //     var page   = {{$listProduct->currentPage()}};
    //     var url    = "{{route('product')}}?";
    //     if(type != ''){
    //         url +="&type="+type;
    //     }
    //     if(status != ''){
    //         url +="&status="+status;
    //     }
    //     if(page != ''){
    //         url +="&page="+page;
    //     }
    //     window.location.href = url;
    // }
</script>
@endsection
<!-- end js-->
