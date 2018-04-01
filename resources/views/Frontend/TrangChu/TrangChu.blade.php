@extends('Frontend.Main.Main')
@section('title')
GioiThieu
@endsection
@section('content')
<div class="col-xs-12 content-1">
    <div class="col-xs-12 dangnhap-1">Tin tức</div>
    <div class="col-xs-12 dangky-1 pdl-0 pdr-0">
        <div class="col-xs-3 pdl-0"><img class="img-rounded trangchu-1" src="{{ asset($data['firstTinThongBao']->anhdaidien) }}"></div>
        <div class="col-xs-9 pdr-0"><a href="{{route('tintuc',['id'=>$data['firstTinThongBao']->id])}}">{{ $data['firstTinThongBao']->tieude }}</a></div>
    </div>
    <div class="col-xs-12 pdl-0 pdr-0"><hr/></div>
    <div class="col-xs-12 pdl-0 pdr-0">
        <div class="col-xs-3 pdl-0 pdr-0">
            <img class="img-rounded trangchu-2" src="{{ asset('img/slide4.jpg') }}">
            <div class="trangchu-3"><a href="">Phát biểu tổng kết hội thi</a></div>
        </div>
        <div class="col-xs-3 pdl-0 pdr-0">
            <img class="img-rounded trangchu-2" src="{{ asset('img/slide4.jpg') }}">
            <div class="trangchu-3"><a href="">Phát biểu tổng kết hội thi</a></div>
        </div>
        <div class="col-xs-3 pdl-0 pdr-0">
            <img class="img-rounded trangchu-2" src="{{ asset('img/slide4.jpg') }}">
            <div class="trangchu-3"><a href="">Phát biểu tổng kết hội thi</a></div>
        </div>
        <div class="col-xs-3 pdl-0 pdr-0">
            <img class="img-rounded trangchu-2" src="{{ asset('img/slide4.jpg') }}">
            <div class="trangchu-3"><a href="">Phát biểu tổng kết hội thi</a></div>
        </div>
    </div>
    <div class="col-xs-12 dangnhap-1 trangchu-4">Hoạt động sinh viên</div>
    <div class="col-xs-12 dangky-1 pdl-0 pdr-0">
        <div class="col-xs-3 pdl-0"><img class="img-rounded trangchu-1" src="{{ asset('img/slide4.jpg') }}"></div>
        <div class="col-xs-9 pdr-0"><a href="">Phát biểu tổng kết hội thi, đồng chí Nguyễn Nhật Tân, Chủ tịch Công đoàn Trường, trưởng ban Giám khảo đã khẳng định: “Hội thi hôm nay đã thành công ngoài mong đợi của chúng tôi khi xuất hiện trên sân khấu là những màn đẹp - độc và lạ của các đội.</a></div>
    </div>
    <div class="col-xs-12 pdl-0 pdr-0"><hr/></div>
    <div class="col-xs-12 pdl-0 pdr-0">
        <div class="col-xs-3 pdl-0 pdr-0">
            <img class="img-rounded trangchu-2" src="{{ asset('img/slide4.jpg') }}">
            <div class="trangchu-3"><a href="">Phát biểu tổng kết hội thi</a></div>
        </div>
        <div class="col-xs-3 pdl-0 pdr-0">
            <img class="img-rounded trangchu-2" src="{{ asset('img/slide4.jpg') }}">
            <div class="trangchu-3"><a href="">Phát biểu tổng kết hội thi</a></div>
        </div>
        <div class="col-xs-3 pdl-0 pdr-0">
            <img class="img-rounded trangchu-2" src="{{ asset('img/slide4.jpg') }}">
            <div class="trangchu-3"><a href="">Phát biểu tổng kết hội thi</a></div>
        </div>
        <div class="col-xs-3 pdl-0 pdr-0">
            <img class="img-rounded trangchu-2" src="{{ asset('img/slide4.jpg') }}">
            <div class="trangchu-3"><a href="">Phát biểu tổng kết hội thi</a></div>
        </div>
    </div>
</div>
@endsection
