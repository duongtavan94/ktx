@extends('Frontend.Main.Main')
@section('title')
Đăng ký
@endsection
@section('content')
<div class="col-xs-12 content-1">
    <div class="col-xs-12 gioithieu-1">Đăng ký phòng</div>
    <div>Họ và tên</div>
    <div><input id="name" class="form-control" type="text" name=""></div>
    <div>Mã sinh viên:*</div>
    <div><input id="masv" class="form-control" type="text" name=""></div>
    <div>Lớp/ Khoa</div>
    <div><input id="lopkhoa" class="form-control" type="text" name=""></div>
    <div>Diện ưu tiên</div>
    <div>
        <select id="dienuutien" class="form-control">
            <option value="1">Không ưu tiên</option>
            <option value="2">Ưu tiên</option>
        </select>
    </div>
    <div>Mã phòng</div>
    <div><input id="maphong" class="form-control" type="text" name=""></div>
    <div>Ngày sinh</div>
    <div><input id="ngaysinh" class="form-control datetimepicker" type="text" name=""></div>
    <div>Quê quán</div>
    <div><input id="quequan" class="form-control" name=""></div>
    <div>Email</div>
    <div><input id="email" class="form-control" name=""></div>
    <div>Số điện thoại</div>
    <div><input id="sodienthoai" class="form-control" name=""></div>
    <div>Ghi chú</div>
    <div><input id="ghichu" class="form-control" name=""></div>
    <div class="error" id="error"></div>
    <div class="dangky-1"><button id="dangky" type="button" class="btn btn-success">Đăng ký</button></div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Đăng ký</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div>
                <img class="modal-img-custom" src="{{ asset('img/success.png') }}">
                <span class="modal-content-custom">Đăng ký phòng thành công</span>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Đăng ký</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div>
                <img class="modal-img-custom" src="{{ asset('img/error.png') }}">
                <span class="modal-content-custom">Mã sinh viên đã được đưng ký</span>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
var error = '';
$('#dangky').click(function(){
    var name = $('#name').val();
    var masv = $('#masv').val();
    var lopkhoa = $('#lopkhoa').val();
    var dienuutien = $('#dienuutien').val();
    var maphong = $('#maphong').val();
    var ngaysinh = $('#ngaysinh').val();
    var quequan = $('#quequan').val();
    var email = $('#email').val();
    var sodienthoai = $('#sodienthoai').val();
    var ghichu = $('#ghichu').val();
    if (masv == '') {
        error = 'Mã sinh viên không được để trống';
        $('#error').html(error);
        return false;
    } else {
        error = '';
        $('#error').html(error);
    }
    $.ajax({
        url: '{{ route("ajaxSinhVien") }}',
        type: 'GET',
        data: {
            name: name,
            masv: masv,
            lopkhoa: lopkhoa,
            dienuutien: dienuutien,
            maphong: maphong,
            ngaysinh: ngaysinh,
            quequan: quequan,
            email: email,
            sodt: sodienthoai,
            ghichu: ghichu,
            action: 'dangKyPhong',
            "_token": "{{ csrf_token() }}",
        } ,
        success: function (results) {
            if (results.success == 1) {
                $('#modal-success').modal();
            } else {
                $('#modal-error').modal();
            }
        },
    });
})
</script>
@endsection
