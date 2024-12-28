@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="py-3">Quản lý phân quyền | Role Management</h2>
            <div class="col-md-12 row">
                <div class="col-3">
                    <div class="list-group">
                        <a href="{{ route('user-manager') }}" class="list-group-item d-flex justify-content-between align-items-center">
                            Quản lý người dùng<span class="badge badge-danger d-block">2</span>
                        </a>
                        <a href="{{ route('role-manager') }}" class="list-group-item d-flex justify-content-between align-items-center active">
                            Quản lý phân quyền 
                            <span class="badge badge-danger bg-warning text-dark">1</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                            Cài đặt khác
                            <span class="badge badge-primary badge-pill">1</span>
                        </a>
                    </div>
                </div>
                <div class="col-9">
                    <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tạo mới
                    </button>
                    <div class="table-wrap">
                        <table class="table table-responsive-xl w-100">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Phân quyền</th>
                                <th>Trạng thái</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $index => $u)
                                <tr class="alert" role="alert">
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td class="d-flex align-items-center">
                                        <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                        <div class="pl-3 email">
                                            <span>{{ $u->email }}</span>
                                            <span>Ngày tạo: {{ date('d-m-Y H:s', strtotime($u->created_at)) }}</span>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="status"><span class="active">Active</span></td>
                                    <td>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
