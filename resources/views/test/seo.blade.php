@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<div class="alert alert-danger">
    <div>Thành 666 : Không cho phép xóa bài kỹ thuật</div>
    <div>Thành 666 : Cho phép xóa bài hồi phục</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Nội dung sửa cho seo
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>STT</td>
            <td>Ảnh chụp</td>
            <td>Ngày</td>
            <td>Nội dung</td>
            <td>#</td>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td>17/4</td>
            <td>đổi đuôi link bài viết từ .htm thành .html</td>
            <td>#</td>
        </tr>
        <tr>
            <td>2</td>
            <td><a href="{{ asset('public/images/seo/h2menu.png') }}"><img src="{{ asset('public/images/seo/h2menu.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>17/4</td>
            <td>Sửa menu thẻ h3,thẻ h4, thẻ h5 về h2</td>
            <td>#</td>
        </tr>
        <tr>
            <td>3</td>
            <td><a href="{{ asset('public/images/seo/h1desktop.png') }}"><img src="{{ asset('public/images/seo/h1desktop.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>17/4</td>
            <td>Sửa trang chủ thẻ h2 thành h1, các trang khác lại vẫn là h2</td>
            <td>#</td>
        </tr>
        <tr>
            <td>4</td>
            <td><a href="{{ asset('public/images/seo/linkcarel.png') }}"><img src="{{ asset('public/images/seo/linkcarel.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>17/4</td>
            <td>Đổi linkcarel sitemap.xml về trang chủ phòng khám</td>
            <td>#</td>
        </tr>
        <tr>
            <td>5</td>
            <td><a href="{{ asset('public/images/seo/votinh.png') }}"><img src="{{ asset('public/images/seo/votinh.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>18/4</td>
            <td>
                <p>Đổi Vô tinh => Không có tinh trùng</p>
                <p>Đổi Thủ thuật hẹp bao quy đầu => Hẹp bao quy đầu</p>
            </td>
            <td>#</td>
        </tr>
        <tr>
            <td>6</td>
            <td><a href="{{ asset('public/images/seo/menutrangconnoth2.png') }}"><img src="{{ asset('public/images/seo/menutrangconnoth2.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>20/4</td>
            <td>
                <p>Sửa h2 menu ở trang chủ, thì trang trong, menu không còn là h2</p>
            </td>
            <td>#</td>
        </tr>
        <tr>
            <td>7</td>
            <td><a href="{{ asset('public/images/seo/home1.png') }}"><img src="{{ asset('public/images/seo/home1.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>20/4</td>
            <td>
                <p>Sửa phần "Về chúng tôi"</p>
            </td>
            <td>#</td>
        </tr>
        <tr>
            <td>8</td>
            <td><a href="{{ asset('public/images/seo/home2.png') }}"><img src="{{ asset('public/images/seo/home2.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>20/4</td>
            <td>
                <p>Sửa phần "Trường hợp hồi phục" chạy slide 9 trường hợp hồi phục</p>
            </td>
            <td>#</td>
        </tr>
        <tr>
            <td>9</td>
            <td><a href="{{ asset('public/images/seo/home3.png') }}"><img src="{{ asset('public/images/seo/home3.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>20/4</td>
            <td>
                <p>Sửa phần "Giao lưu học thuật"</p>
            </td>
            <td>#</td>
        </tr>
        <tr>
            <td>10</td>
            <td><a href="{{ asset('public/images/seo/doilink.png') }}"><img src="{{ asset('public/images/seo/doilink.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>21/4</td>
            <td>
                <p>Sửa link url cho số vào trong, bỏ "/"</p>
            </td>
            <td>#</td>
        </tr>
        <tr>
            <td>11</td>
            <td><a href="{{ asset('public/images/seo/home3.png') }}"><img src="{{ asset('public/images/seo/home3.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>21/4</td>
            <td>
                <p>Chạy slide giao lưu học thuật lần lượt sau 2 giây</p>
            </td>
            <td>#</td>
        </tr>
        <tr>
            <td>12</td>
            <td><a href="{{ asset('public/images/seo/chantrang.png') }}"><img src="{{ asset('public/images/seo/chantrang.png') }}" class="img-responsive" style="max-width:200px;"></a></td>
            <td>21/4</td>
            <td>
                <p>Thay mới chân trang</p>
            </td>
            <td>#</td>
        </tr>
    </table>
</div>
@endsection('content')