@extends('back_end.layout.index')
@section('title', 'Edit user')
<!-- style -->
@section('include-style')
@endsection

@section('custom-style')

@endsection
<!-- content-->
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Quản lý user
        <small>Edit user</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="./admin"><i class="fa fa-dashboard"></i>Trang chủ admin</a></li>
        <li><a href="{{ route('user') }}">Quản lý user</a></li>
        <li class="active">Edit user</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                @if (session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
                @endif
                @if (session('loi'))
                <div class="alert alert-danger">
                    {{ session('loi') }}
                </div>
                @endif
                <form role="form" action="{{ route('user.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <div class="box-body">
                        <div class="form-group @if ($errors->get('username'))
                        has-error
                        @endif">
                            <label for="exampleInputEmail1">Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                placeholder="Tên đăng nhập" value="{{ $item->username }}" required>
                            @if ($errors->get('username'))
                            @foreach ($errors->get('username') as $error)
                            <span class="help-block">
                                {{ $error }}
                            </span>
                            @endforeach
                            @endif
                        </div>
                        <div class="form-group @if ($errors->get('password'))
                                has-error
                                @endif">
                            <label for="exampleInputEmail1">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                placeholder="Mật khẩu" value="">
                            @if ($errors->get('password'))
                            @foreach ($errors->get('password') as $error)
                            <span class="help-block">
                                {{ $error }}
                            </span>
                            @endforeach
                            @endif
                        </div>
                        <div class="form-group @if ($errors->get('re_password'))
                                has-error
                                @endif">
                            <label for="exampleInputEmail1">Xác nhận mật khẩu</label>
                            <input type="password" name="re_password" class="form-control" id="exampleInputEmail1"
                                placeholder="Mật khẩu" value="">
                            @if ($errors->get('re_password'))
                            @foreach ($errors->get('re_password') as $error)
                            <span class="help-block">
                                {{ $error }}
                            </span>
                            @endforeach
                            @endif
                        </div>
                        <div class="form-group @if ($errors->get('name'))
                                has-error
                                @endif">
                            <label for="exampleInputEmail1">Tên</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                placeholder="Tên người dùng" value="{{ $item->name }}" required>
                            @if ($errors->get('name'))
                            @foreach ($errors->get('name') as $error)
                            <span class="help-block">
                                {{ $error }}
                            </span>
                            @endforeach
                            @endif
                        </div>
                        <div class="form-group @if ($errors->get('email'))
                                has-error
                                @endif">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Email" value="{{ $item->email }}" required>
                            @if ($errors->get('email'))
                            @foreach ($errors->get('email') as $error)
                            <span class="help-block">
                                {{ $error }}
                            </span>
                            @endforeach
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="active" checked> Active
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        {{-- <a href="{{ route('user') }}" class="btn btn-default">Thoát</a> --}}
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
<!--end content-->
<!-- js -->
@section('include-js')
@endsection
@section('custom-js')
@endsection
<!-- end js-->
