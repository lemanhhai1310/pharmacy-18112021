<?php $data["title"] = "Thanh toán"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Giỏ hàng',
        'link' => 'giohang.php',
    ),
    array(
        'txt' => 'Đặt hàng',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php";
?>
<div class="dathang__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <h1 class="uk-h1 quantam__title">Đặt hàng</h1>
        <div class="dathang__box">
            <div class="dathang__box__item">
                <div class="footer__center__item16">
                    <h3 class="uk-h3 dathang__box__title">1. Người đặt & địa chỉ giao hàng</h3>
                </div>
                <div class="footer__center__item16">
                    <div class="xacnhandonhang__txt1">Trần Văn A</div>
                    <div class="xacnhandonhang__txt1">Số 102, Hoàng Đạo Thuý, Trung Hoà Nhân Chính, Cầu Giấy, Hà Nội</div>
                </div>
                <a href="" class="uk-position-top-right xacnhandonhang__edit">Chỉnh sửa</a>
            </div>
            <div class="dathang__box__item">
                <div class="footer__center__item16">
                    <h3 class="uk-h3 dathang__box__title">2. Xác nhận đơn hàng</h3>
                </div>
                <div class="footer__center__item16">

                </div>
                <a href="" class="uk-position-top-right xacnhandonhang__edit">Chỉnh sửa</a>
            </div>
            <div class="dathang__box__item">
                <div class="footer__center__item16">
                    <h3 class="uk-h3 dathang__box__title">3. Thanh toán</h3>
                </div>
                <div class="footer__center__item16">

                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>