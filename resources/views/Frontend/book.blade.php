@extends('Frontend.layouts.master')

@section('title')
<title>Đặt lịch hẹn</title> 
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="front/css/style_book.css"/> 
@endsection

@section('content')

<div class="center">
    <div class="contact">
        <a href="{{ route('index') }}" style="color: black;">Trang chủ</a> <a ><i class="fa fa-angle-right" aria-hidden="true"></i> Đặt Lịch hẹn </a>
        <p style="font-weight: 600;margin-top: 20px; font-size: 20px;">Gửi yêu cầu Lịch hẹn cho chúng tôi  </p>
        {{--  <form action="postbook" method="POST" id="contactFrm" novalidate="novalidate">  --}}
        <form action="{{ route('postbook') }}" method="POST" id="contactFrm" novalidate="novalidate">
           @csrf
            {{--  <label>
                <input type="text" name="name" placeholder="Họ và tên (*)" >
            </label>
            <label>
                <input style="margin-left:15px" type="text" name="phone" placeholder="Điện thoại (*)">
            </label>
            <label>
                <input style="margin-top:15px" type="text" name="email_sender" placeholder="Email">
            </label>  --}}
            <label>
                <input style="" type="text" name="service" value="{{ $category[0]->category_name }}">
            </label>
            <br>
            <label>
                <input style=" margin-left:25px" type="datetime-local" name="time_book">
            </label>
            <textarea style="margin-top:25px; margin-left: 1px" name="note" cols="30" rows="10" placeholder="Bạn có lưu ý gì không ?"></textarea>
            <button id="btnContact" type="submit">Đặt lịch</button> 
            <br>
            <p style="font-weight: 600;margin-top: 35px; margin-left: 50px; font-size: 14px;">Chúng tôi sẽ liên hệ lại với bạn để xác nhận !</p>
        </form>
    </div>
    <div class="location">
        <p style="font-weight: 600;margin-top: 40px; font-size: 20px;">Thông tin liên hệ</p>
        <ul>
            <li>
                <p><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 9px; color: #de9228;"></i>43 Trần Xuân Soạn, Ngô Thì Nhậm, Hai Bà Trưng, Hà Nội</p>
            </li>
            <li>
                <p><i class="fa fa-phone" aria-hidden="true" style="margin-right: 9px;color: #de9228;"></i>032 6868 68</p> 
            </li>
            <li>
                <p><i class="fa fa-envelope" aria-hidden="true" style="margin-right: 9px;color: #de9228;"></i>info@beautyspa.com.vn</p>
            </li>
            <li>
                <p><i class="fa fa-globe"  aria-hidden="true" style="margin-right: 9px;color: #de9228;"></i>www.beautyspa.vn</p>
            </li>
        </ul>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3951200147494!2d105.85136051444506!3d21.016870593561052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf2c6b8a479%3A0x7efbf7b3b7611cc6!2zVHLhuqduIFh1w6JuIFNv4bqhbiwgTmfDtCBUaMOsIE5o4bqtbSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1613810321826!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

@endsection