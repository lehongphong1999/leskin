@extends('Frontend.layouts.master')

@section('title')
<title>Liên hệ</title> 
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_contact.css"/> 
@endsection

@section('content')

<div class="center">
    <div class="contact">
        <a href="{{ route('index') }}" style="color: black;">Trang chủ</a> <a ><i class="fa fa-angle-right" aria-hidden="true"></i> Liên hệ </a>
        <p style="font-weight: 600;margin-top: 20px; font-size: 20px;">Gửi thông tin liên hệ cho chúng tôi</p>
        <form action="{{ route('postcontact') }}" method="POST" id="contactFrm" novalidate="novalidate">
           @csrf
            <label for="">
                <input type="text" name="name" placeholder="Họ và tên (*)" >
            </label>
            <label>
                <input style="margin-left:15px" type="text" name="phone" placeholder="Điện thoại (*)">
            </label>
            <label for="">
                <input style="margin-top:15px" type="text" name="email_sender" placeholder="Email">
            </label>
            <label>
                <input style="margin-left:15px; margin-top:15px" type="text" name="subject" placeholder="Tiêu đề">
            </label>
            <textarea style="margin-top:25px; margin-left: 1px" name="content" cols="30" rows="10" placeholder="Nội dung"></textarea>
            <button id="btnContact" type="submit">Gửi đi</button>
        </form>
    </div>
    <div class="location">
        <p style="font-weight: 600;margin-top: 40px; font-size: 20px;">Thông tin liên hệ</p>
        <ul>
            <li>
                <p><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 9px; color: #de9228;"></i>Số 1 LK 11A, KĐT Mỗ Lao, Hà Đông, Hà Nội</p>
            </li>
            <li>
                <p><i class="fa fa-phone" aria-hidden="true" style="margin-right: 9px;color: #de9228;"></i>320 686 55</p> 
            </li>
            <li>
                <p><i class="fa fa-envelope" aria-hidden="true" style="margin-right: 9px;color: #de9228;"></i>info@leskin.vn</p>
            </li>
            <li>
                <p><i class="fa fa-globe"  aria-hidden="true" style="margin-right: 9px;color: #de9228;"></i>www.leskin.vn</p>
            </li>
        </ul>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.582272719551!2d105.81802711444496!3d21.009375493816727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad02ce4d8575%3A0x309c60dfb498ba3b!2zRGV2bWFzdGVyIMSQw6BvIFThuqFvIEzhuq1wIFRyw6xuaA!5e0!3m2!1svi!2s!4v1599536354011!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

@endsection