@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Lịch sử giao dịch</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_user_history.css"/> 
@endsection

@section('content')

<div class="form-info">
    <div class="title3">
        <span>LỊCH SỬ GIAO DỊCH</span>
    </div>
    <div class="history-detail">
        <div class="history-detail-menu">
            <span>Ngày </span>
            <span>Nội dung </span>
            <span>Số tiền </span>
            <span>Trạng thái </span>
        </div>
        <div class="history-detail-item">
            <div class="history-detail-item1">
                <span>24/7/2020 </span>
                <span>Mua Mỹ Phẩm Bran2d-66-DCIM </span>
                <span>-300.000 </span>
                <span>Thành công </span> 
            </div>
            <div class="history-detail-item1">
                <span>24/7/2020 </span>
                <span>Mua Mỹ Phẩm Bran2d-66-DCIM </span>
                <span>-300.000 </span>
                <span>Thành công </span> 
            </div>
        </div>
    </div>
</div>

@endsection