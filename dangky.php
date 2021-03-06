<?php $data["title"] = "Đăng ký"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Đăng ký',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php";
$isAddress = rand(true,false);
?>
<div class="dangnhap__section uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/health-still-life-with-copy-space1.png" uk-img uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="dangky__card uk-card uk-card-body uk-card-default">
                <div class="footer__center__item24">
                    <h1 class="uk-h1 quantam__title uk-margin-remove">Đăng ký</h1>
                </div>
                <div class="footer__center__item24">
                    <div class="uk-child-width-1-2@m uk-grid-small uk-grid-30-m" uk-grid>
                        <div>
                            <form class="uk-grid-small uk-grid-30-m" uk-grid>
                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Danh xưng *</option>
                                            <option value="1">Ông (Mr.)</option>
                                            <option value="2">Bà (Mrs.)</option>
                                        </select>
                                        <button class="modal__wishList__form__btnSelect uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                            <span></span>
                                            <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Người đại diện *">
                                </div>
                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Số CMT/ CCCD *">
                                </div>
                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column"></div>
                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Số điện thoại *">
                                </div>
                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Email">
                                </div>
                                <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Tên nhà thuốc *">
                                </div>

                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Mật khẩu *">
                                </div>
                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Xác nhận mật khẩu *">
                                </div>

                                <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                                    <label class="chitiettintuc__boxComment__label"><input class="uk-checkbox chitiettintuc__boxComment__check" type="checkbox" checked> <span class="chitiettintuc__boxComment__checkTxt">Tôi đồng ý rằng dữ liệu của tôi đã gửi đang được thu thập và lưu trữ. Để biết thêm chi tiết về việc xử lý dữ liệu người dùng, hãy xem Chính sách quyền riêng tư của chúng tôi.</span></label>
                                </div>
                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                    <button type="submit" class="uk-button uk-button-default chitiettintuc__boxComment__btn uk-width-1-1"><span>Tạo tài khoản</span></button>
                                </div>
                            </form>
                        </div>
                        <div>
                            <div class="footer__center__item16">
                                <a href="#modal-address" uk-toggle class="xacnhandonhang__edit">Thêm địa chỉ nhà thuốc</a>
                            </div>
                            <div class="footer__center__item16">
                                <?php if ($isAddress): ?>
                                    <div class="dangky__box1">
                                        <div class="dangky__box1__item">
                                            <div class="uk-position-top-right">
                                                <a href="" class="dangky__box1__actionIcon dangky__box1__actionIcon--edit"></a>
                                                <a href="" class="dangky__box1__actionIcon dangky__box1__actionIcon--delete"></a>
                                            </div>
                                            <h4 class="uk-h4 dangky__box1__title">Cơ sở 1</h4>
                                            <div class="quantam__table__price">Số 102, Hoàng Đạo Thuý, Trung Hoà Nhân Chính, Cầu Giấy, Hà Nội</div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="uk-cover-container dangky__box">
                                        <canvas width="1212" height="550"></canvas>
                                        <span class="uk-position-center quantam__table__price">Chưa có địa chỉ nhà thuốc nào</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-address" uk-modal>
            <div class="uk-modal-dialog uk-modal-dialog-s">
                <button class="uk-modal-close-default header__bottom__close" type="button" uk-close></button>
                <div class="uk-modal-header modal__order__header">
                    <h2 class="uk-modal-title modal__order__title">Thêm địa chỉ nhà thuốc</h2>
                </div>
                <div class="uk-modal-body modal__order__body">
                    <form class="uk-grid-small uk-grid-30-m" uk-grid>
                        <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                            <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Tên cơ sở *">
                        </div>
                        <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                            <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Số nhà, ngõ/ ngách, đường (địa chỉ nhà thuốc) *">
                        </div>

                        <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Phường/Xã *</option>
                                    <option value="1">Ông (Mr.)</option>
                                    <option value="2">Bà (Mrs.)</option>
                                </select>
                                <button class="modal__wishList__form__btnSelect uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Quận/ Huyện *</option>
                                    <option value="1">Ông (Mr.)</option>
                                    <option value="2">Bà (Mrs.)</option>
                                </select>
                                <button class="modal__wishList__form__btnSelect uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Tỉnh/ Thành phố *</option>
                                    <option value="1">Ông (Mr.)</option>
                                    <option value="2">Bà (Mrs.)</option>
                                </select>
                                <button class="modal__wishList__form__btnSelect uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                    <span></span>
                                    <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s chitiettintuc__boxComment__column"></div>

                        <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                            <button type="button" class="quantam__btnBack uk-button uk-button-default uk-width-1-1"><span>Đăng ký</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            // UIkit.modal('#modal-address').show();
        </script>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>