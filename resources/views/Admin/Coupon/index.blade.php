@extends('Admin.layouts.sidebar')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><b>Admin <i class="fa fa-angle-right" aria-hidden="true"></i> Khuyến Mại</b></h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search ..." style="border-radius: 25rem;">

              <div class="input-group-append">
                <button style="border-radius: 25rem; margin-left: 10px" type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-header">
          <button type="submit" style="height: 30px ;width: 80px;;color: #fff;background-color:  rgb(124, 230, 124); border:none ; border-radius: 25rem; margin-left: 918px"><a href="{{ route('addcoupon') }}"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 5px"></i><b>Add</b></a></button>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" >
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã KM</th>
                <th>Khuyến mại</th>
                <th>Số lượng</th>
                <th>Đã sử dụng</th>
                <th>Trạng thái</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if (!is_null($db))
              {{--  @foreach ($db as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>  --}}
                @foreach ($db as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td> {{ str_limit($item->code_coupon, 15) }}</td>
                    <td>{{ $item->percent }}%</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->used }}</td>
                    <td>
                      @if ($item->status==1)
                      Hiển thị
                      @else
                      Ẩn  
                      @endif
                    </td>
                    <td>
                      <button style="width: 70px;height: 30px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('editcoupon', ['id'=>$item->id]) }}"><i class="nav-icon fas fa-edit" style="margin-right: 4px"></i>Edit</a></button>
                      <button style="width: 80px;height: 30px;margin-right: 20px;background: rgb(124, 230, 124) ; color:white ; border: none;border-radius:25rem"><a href="{{ route('deletecoupon', ['id'=>$item->id]) }}"><i class="fa fa-trash" aria-hidden="true" style="margin-right: 4px"></i>Delete</a></button>
                    </td>
                </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
        {{ $db->links() }}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection
