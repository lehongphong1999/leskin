@extends('Admin.layouts.sidebar')

@section('content')
    
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hộp thư</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Hộp thư</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<div class="row" style="margin-left: 10px">
    <div class="col-md-3">
      <a href="{{ route('sendcontact' )}}" class="btn btn-primary btn-block mb-3" style="border-radius: 25rem; width: 90%;"><i class="fa fa-plus" aria-hidden="true"></i>  Soạn thư</a>

      <div class="card" style="border-radius: 10px; width: 90%;" >
        <div class="card-header" >
          <h3 class="card-title"><b>Chức năng</b></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item active">
              <a href="#" class="nav-link">
                <i class="fas fa-inbox"></i> Hộp thư
                <span class="badge bg-primary float-right">12</span>
              </a>
            </li>
            {{--  <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-envelope"></i> Gửi đi
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i style="color: #827b69!important;" class="fas fa-star text-warning"></i> Quan trọng
                </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-file-alt"></i> Nháp
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-trash-alt"></i> Thùng rác
              </a>
            </li>  --}}
          </ul>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-md-9" style="padding:0px 20px 0px 0px;">
      <div class="card card-primary card-outline" style="border-radius: 5px;min-height: 308px;">
        <div class="card-header">
          <h3 class="card-title">Hộp thư</h3>

          <div class="card-tools" >
            <div class="input-group input-group-sm" >
              <input type="text" class="form-control" placeholder="Tìm kiếm...">
              <div class="input-group-append">
                <div class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="mailbox-controls">
            <!-- Check all button -->
            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
              {{-- <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button> --}}
            </div>
            <!-- /.btn-group -->
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
            <div class="float-right">
              <div class="btn-group">
                {{ $db->links() }}
              </div>
              <!-- /.btn-group -->
            </div>
            <!-- /.float-right -->
          </div>
          <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
              <tbody>
              <tr>
                <td>
                  <div class="icheck-primary" >
                    {{-- <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i> --}}
                    <input type="checkbox" value="" id="checkAll">
                    <label for="checkAll">All</label>
                  </div>
                </td>
                <td class="mailbox-star"><a href="#" style="color: black"><b>Quan trọng</b></a></td>
                <td class="mailbox-name"><a href="#" style="color: black"><b>Người gửi</b></a></td>
                <td class="mailbox-subject"><b>Nội dung</b></td>
                <td class="mailbox-date"><b>Thời gian</b></td>
                <td class="mailbox-attachment"><b>Trạng thái</b></td>
              </tr>    
                @if (!is_null($db))
                  @foreach ($db as $item)
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star">
                      @if($item->status_important==0)
                      
                      @else
                      <a href="#"><i class="fas fa-star text-warning"></i></a>
                      @endif
                    </td>
                    <td class="mailbox-name"><a href="{{ route('readmailcontact', ['id'=>$item->id]) }}">{{ $item->email_sender }}</a></td>
                    <td class="mailbox-subject"><b>{{ $item->subject }}</b> <br> {{ $item->content }}</td>
                    <td class="mailbox-date">{{ $item->created_at->format('h:m d-m-Y') }}</td>
                    <td class="mailbox-status">
                      @if($item->status_reply==0)
                      Chưa trả lời 
                      @else
                      Đã trả lời 
                      @endif
                    </td>
                  </tr>
                  @endforeach
                @endif 
              </tbody>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>

@endsection