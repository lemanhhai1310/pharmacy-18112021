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
                    <div uk-grid>
                        <div class="uk-width-expand">
                            <div class="thanhtoan__box1">
                                <table class="uk-table uk-table-divider uk-margin-remove uk-table-responsive">
                                    <tbody>
                                    <?php foreach ($data as $k=>$v):
                                        $stock = rand(true,false);
                                        $isPrice = rand(true,false);
                                        $price = array('27.000đ','49.000đ','310.000đ','17.500đ','250.000đ','320.000đ','19.000đ','32.000đ');
                                        $percent = array(20,40,60,80,100);
                                        $label = array('new','hot','sale','notSale');
                                        $txt = array('Bottle','30ml');
                                        ?>
                                        <tr>
                                            <td>
                                                <h4 class="uk-h4 quantam__table__title"><a href=""><?= $v['title'] ?></a></h4>
                                            </td>
                                            <td>
                                                <span class="quantam__table__title">Số lượng: 1</span>
                                            </td>
                                            <td>
                                                <span class="quantam__table__price">Thành tiền: </span>
                                                <span class="quantam__table__price quantam__table__price--c1"><?= $price[array_rand($price)] ?></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="uk-width-1-3@m">
                            <div class="giohang__card__item">
                                <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid="">
                                    <div class="uk-width-expand">
                                        <span class="quantam__table__title">Tạm tính</span>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="quantam__table__price">402.000đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="giohang__card__item">
                                <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid="">
                                    <div class="uk-width-expand">
                                        <span class="quantam__table__title">Phí vận chuyển</span>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="quantam__table__price">20.000đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="giohang__card__item">
                                <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid="">
                                    <div class="uk-width-expand">
                                        <span class="quantam__table__title">Giảm giá</span>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="quantam__table__price">-0đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="giohang__card__item giohang__card__item--divider">
                                <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid="">
                                    <div class="uk-width-expand">
                                        <span class="quantam__table__title">Tổng tiền</span>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="quantam__table__price quantam__table__price--c1 quantam__table__price--c2">422.000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="uk-position-top-right xacnhandonhang__edit">Chỉnh sửa</a>
            </div>
            <div class="dathang__box__item">
                <div class="footer__center__item24">
                    <div class="footer__center__item16">
                        <h3 class="uk-h3 dathang__box__title">3. Thanh toán</h3>
                    </div>
                    <div class="footer__center__item16">
                        <span class="quantam__table__price">Vui lòng chọn phương thức thanh toán</span>
                    </div>
                    <div class="footer__center__item16">
                        <div class="uk-grid-small uk-child-width-1-1 uk-grid">
                            <label><input class="uk-radio thanhtoan__radio" type="radio" name="radio2" checked> <span class="thanhtoan__txt">Thanh toán khi nhận hàng</span></label>
                            <label><input class="uk-radio thanhtoan__radio" type="radio" name="radio2"> <span class="thanhtoan__txt">Thanh toán bằng Thẻ Tín dụng / Ghi nợ</span></label>
                            <label><input class="uk-radio thanhtoan__radio" type="radio" name="radio2"> <span class="thanhtoan__txt">Thanh toán qua mã QR</span></label>
                            <label><input class="uk-radio thanhtoan__radio" type="radio" name="radio2"> <span class="thanhtoan__txt">Thanh toán bằng chuyển khoản bằng VNPay</span></label>
                            <label><input class="uk-radio thanhtoan__radio" type="radio" name="radio2"> <span class="thanhtoan__txt">Thanh toán bằng chuyển khoản qua ngân hàng</span></label>
                        </div>
                    </div>
                </div>
                <div class="footer__center__item24">
                    <a href="thanhtoan.php" class="uk-button uk-button-default chitiettintuc__boxComment__btn"><span>Đặt hàng</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>