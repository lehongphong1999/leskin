@extends('Frontend.layouts_user.folder_master_user.master_user')

@section('title')
<title>Thông tin ví</title> 
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_user_wallet.css"/> 
@endsection

@section('content')

<div class="center-detail">
    <div class="center-header">
        <div class="col-ct-1">
            <i style="margin-right: 5px;" class="fa fa-tag" aria-hidden="true"></i>
            <span style="margin-right: 5px;" class="title_item">Voucher</span>
            <span  class="number">02</span>
        </div>
        <div class="col-ct-1">
            <i style="margin-right: 5px;"class="fa fa-gift" aria-hidden="true"></i>
            <span  style="margin-right: 5px;"class="title_item">Coupon</span>
            <span class="number">02</span>
        </div>
        <div class="col-ct-1">
            <i style="margin-right: 5px;"class="fa fa-star" aria-hidden="true"></i>
            <span  style="margin-right: 5px;"class="title_item">Điểm</span>
            <span class="number">2168</span>
        </div>
    </div>
    <div class="number-circle">
        <span style="padding-left: 320px;margin-top: 50px;" class="title-item22">Số điểm của bạn</span>
        <div class="number-circle-center">
            <span style=" font-weight: 600;"class="title-item">2168</span>
            <br>
            <span style="color: orange; font-weight: 550;" class="title-item">Điểm</span>
        </div>
    </div>
    <div class="btAction">
        <div class="form-group row">
            <div class="col-sm-6">
              <button type="trao đổi" class="btn btn-primary" style=" margin-left: 257px; background: rgb(204, 204, 201) ; border:  white;border-radius: 18px; color: black; font-size: 14px; font-weight: 600;">TRAO ĐỔI</button>
            </div>
            <div class="col-sm-6">
                <button type="cho tặng" class="btn btn-primary" style=" margin-left: 10px; background: rgb(204, 204, 201) ; border:  white;border-radius: 18px; color: black; font-size: 14px; font-weight: 600;">CHO TẶNG</button>
            </div>
        </div>
    </div>
</div>

@endsection