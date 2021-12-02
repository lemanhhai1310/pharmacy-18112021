<?php $data["title"] = "Chi tiết sản phẩm"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Danh mục 1',
        'link' => 'catalog.php',
    ),
    array(
        'txt' => 'Hand Creams for Dry, Sensitive Skin',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php";
?>
<div class="chitietsanpham__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="home__item40">
            <div class="footer__center__item24">
                <div class="uk-grid-small uk-grid-37-m" uk-grid>
                    <div class="uk-width-2-5@m">
                        <div class="uk-position-relative uk-visible-toggle uk-slideshow" tabindex="-1" uk-slideshow="ratio: 1:1;animation: fade;">

                            <div class="uk-position-relative modal__quickView__left__imgFor modal__wishList__item">
                                <ul class="uk-slideshow-items" style="min-height: 436px;">
                                    <?php for ($i=0;$i<=6;$i++): ?>
                                        <li tabindex="-1">
                                            <div class="">
                                                <img src="images/h1-product2-featured.png" alt="" uk-cover>
                                            </div>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>

                            <div class="uk-slider modal__wishList__item" uk-slider="">

                                <div class="uk-position-relative">

                                    <div class="uk-slider-container">
                                        <ul class="uk-thumbnav uk-slider-items uk-child-width-1-4 uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-small uk-grid-16-m uk-grid" uk-grid="" style="transform: translate3d(-111.875px, 0px, 0px);">
                                            <?php for ($i=0;$i<=6;$i++): ?>
                                                <li uk-slideshow-item="<?= $i ?>" tabindex="-1">
                                                    <div class="uk-cover-container modal__quickView__left__img">
                                                        <img src="images/h1-product2-featured.png" alt="" uk-cover>
                                                        <canvas width="200" height="200"></canvas>
                                                    </div>
                                                </li>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>

                                    <div class="">
                                        <a class="modal__quickView__nav modal__quickView__nav--prev uk-position-center-left uk-position-small uk-icon uk-slidenav-previous uk-slidenav" href="#" uk-slidenav-previous="" uk-slider-item="previous"><svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg></a>
                                        <a class="modal__quickView__nav modal__quickView__nav--next uk-position-center-right uk-position-small uk-icon uk-slidenav-next uk-slidenav" href="#" uk-slidenav-next="" uk-slider-item="next"><svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg></a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="modal__wishList__item">
                            <div class="uk-child-width-auto uk-grid-small" uk-grid>
                                <div>
                                    <div class="uk-position-relative uk-display-inline-block home__product__card__rate">
                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                        <div class="uk-position-cover uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: 100%">
                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="modal__quickView__desc">(1 đánh giá)</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal__wishList__item">
                            <h1 class="uk-modal-title modal__quickView__title">Hand Creams for Dry, Sensitive Skin</h1>
                            <div class="modal__quickView__price">55.000đ</div>
                        </div>
                        <div class="modal__wishList__item">
                            <p class="modal__quickView__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="modal__wishList__item">
                            <div class="modal__quickView__box1">
                                <div class="modal__wishList__item">
                                    <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                                        <div>
                                            <div class="modal__quickView__label">Số lượng:</div>
                                        </div>
                                        <div>
                                            <div class="uk-position-relative">
                                                <a href="javascript: void(0)" class="modal__quickView__btnCount modal__quickView__btnCount--minues"></a>
                                                <a href="javascript: void(0)" class="modal__quickView__btnCount modal__quickView__btnCount--plus"></a>
                                                <input class="uk-input uk-form-width-small modal__quickView__input" type="text" placeholder="" value="1">
                                            </div>
                                        </div>
                                        <div class="">
                                            <button type="button" class="modal__quickView__addCart uk-button uk-button-default uk-border-rounded"><span>Thêm giỏ hàng</span></button>
                                        </div>
                                        <div class="uk-width-auto@s">
                                            <button class="uk-button uk-button-default chitietsanpham__btnwishList"><span class="uk-visible@m">Quan tâm</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal__wishList__item">
                                    <div class="modal__quickView__label">Thành tiền: <span>55.000đ</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal__wishList__item">
                            <h3 class="uk-h3 modal__quickView__titleTag">Tags:</h3>
                            <div class="modal__quickView__boxTag">
                                <a href="" class="uk-button uk-button-default uk-button-small uk-border-pill">Kem</a>
                                <a href="" class="uk-button uk-button-default uk-button-small uk-border-pill">Bôi</a>
                                <a href="" class="uk-button uk-button-default uk-button-small uk-border-pill">Dưỡng da</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__center__item24">
                <div class="uk-card chitietsanpham__cardContent">
                    <ul class="uk-margin-remove-bottom chitietsanpham__cardContent__tab" uk-tab="connect: #my-tab">
                        <li class="uk-active"><a href="#">Mô tả</a></li>
                        <li><a href="#">Các thông tin khác</a></li>
                        <li><a href="#">Đánh giá</a></li>
                    </ul>

                    <div class="uk-padding-small uk-card-body chitietsanpham__cardContent__body">
                        <ul class="uk-switcher" id="my-tab">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                            <li>
                                <div class="uk-child-width-1-2 uk-grid-collapse uk-background-default uk-grid" uk-grid="">
                                    <?php
                                    $data = array(
                                        array(
                                            'label' => 'Weight',
                                            'value' => '0.25 kg',
                                        ),
                                        array(
                                            'label' => 'Dimensions',
                                            'value' => '10 × 15 × 15 cm',
                                        ),
                                        array(
                                            'label' => 'Size',
                                            'value' => '100ml, 150ml, 200ml',
                                        ),
                                        array(
                                            'label' => 'Brand',
                                            'value' => 'Bioderma',
                                        ),

                                        array(
                                            'label' => 'Type',
                                            'value' => 'Bottle',
                                        ),
                                        array(
                                            'label' => 'Active substance',
                                            'value' => 'Q10',
                                        ),
                                        array(
                                            'label' => 'Usage',
                                            'value' => 'Hand cream',
                                        ),
                                        array(
                                            'label' => 'Side Effects',
                                            'value' => 'Non-drowsy',
                                        ),
                                    );
                                    foreach ($data as $item): ?>
                                    <div class="uk-padding-small chitietsanpham__cardContent__body__item">
                                        <div class="uk-grid-match uk-grid-10" uk-grid="">
                                            <div>
                                                <span class="chitietsanpham__cardContent__body__item__txt1"><?= $item['label'] ?></span>
                                            </div>
                                            <div>
                                                <span class="chitietsanpham__cardContent__body__item__txt2"><?= $item['value'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </li>
                            <li>
                                <div class="uk-child-width-1-2@m" uk-grid>
                                    <div>
                                        <div class="footer__center__item16">
                                            <h3 class="uk-h3 home__header__title">Đánh giá</h3>
                                        </div>
                                        <div class="footer__center__item16">
                                            <div class="uk-grid uk-grid-16" uk-grid="">
                                                <?php
                                                $data = array(
                                                    array(
                                                        'src' => '',
                                                        'name' => '',
                                                        'desc' => '',
                                                    ),
                                                    array(
                                                        'src' => '',
                                                        'name' => '',
                                                        'desc' => '',
                                                    ),
                                                    array(
                                                        'src' => '',
                                                        'name' => '',
                                                        'desc' => '',
                                                    ),
                                                    array(
                                                        'src' => '',
                                                        'name' => '',
                                                        'desc' => '',
                                                    ),
                                                );
                                                $percent = array(20,40,60,80,100);
                                                foreach ($data as $k=>$v): ?>
                                                    <div class="uk-width-1-1">
                                                        <div class="uk-grid uk-grid-16" uk-grid="">
                                                            <div class="uk-width-auto">
                                                                <div class="uk-cover-container uk-border-circle">
                                                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                                    <canvas width="36" height="36"></canvas>
                                                                </div>
                                                            </div>
                                                            <div class="uk-width-expand">
                                                                <div class="chitiettintuc__item8">
                                                                    <div class="uk-child-width-auto uk-flex-middle uk-grid-small" uk-grid>
                                                                        <div>
                                                                            <h4 class="uk-h4 chitiettintuc__boxComment__titleName">Trần Văn A</h4>
                                                                        </div>
                                                                        <div>
                                                                            <div class="uk-position-relative uk-display-inline-block home__product__card__rate">
                                                                                <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                                                <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                                                <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                                                <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                                                <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                                                <div class="uk-position-cover uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= $percent[array_rand($percent)] ?>%">
                                                                                    <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                                                    <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                                                    <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                                                    <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                                                    <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chitiettintuc__item8 chitiettintuc__boxComment__checkTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                                <div class="chitiettintuc__item8 tintuc__card__desc">12 phút trước</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                                <div class="uk-width-1-1">
                                                    <div class="uk-grid uk-grid-16" uk-grid="">
                                                        <div class="uk-width-auto">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img hidden src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                                <canvas width="36" height="36"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="uk-text-center uk-padding-small chitiettintuc__box1">
                                                                <a href="">Xem thêm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="footer__center__item16">
                                            <h3 class="uk-h3 home__header__title">Thêm đánh giá</h3>
                                        </div>
                                        <div class="footer__center__item16">
                                            <form class="uk-grid-small uk-grid-30-m" uk-grid>
                                                <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                                                    <div class="uk-grid-small uk-child-width-auto uk-flex-middle" uk-grid>
                                                        <div>
                                                            <span class="chitietsanpham__cardContent__body__form__label">Đánh giá</span>
                                                        </div>
                                                        <div>
                                                            <div id="rating">
                                                                <input type="radio" id="star5" name="rating" value="5" />
                                                                <label class = "full" for="star5" title="Awesome - 5 stars"></label>

                                                                <input type="radio" id="star4" name="rating" value="4" />
                                                                <label class = "full" for="star4" title="Pretty good - 4 stars"></label>

                                                                <input type="radio" id="star3" name="rating" value="3" />
                                                                <label class = "full" for="star3" title="Meh - 3 stars"></label>

                                                                <input type="radio" id="star2" name="rating" value="2" />
                                                                <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>

                                                                <input type="radio" id="star1" name="rating" value="1" />
                                                                <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                            </div>
                                                            <div class="uk-clearfix"></div>
                                                            <script>
                                                                function calcRate(r) {
                                                                    const f = ~~r,//Tương tự Math.floor(r)
                                                                        id = 'star' + f + (r % f ? 'half' : '')
                                                                    id && (document.getElementById(id).checked = !0)
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Họ tên">
                                                </div>
                                                <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                                    <input class="uk-input chitiettintuc__boxComment__input" type="text" placeholder="Email">
                                                </div>
                                                <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                                                    <textarea class="uk-textarea chitiettintuc__boxComment__textarea" rows="5" placeholder="Bình luận"></textarea>
                                                </div>
                                                <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                                                    <label class="chitiettintuc__boxComment__label"><input class="uk-checkbox chitiettintuc__boxComment__check" type="checkbox" checked> <span class="chitiettintuc__boxComment__checkTxt">Tôi đồng ý rằng dữ liệu của tôi đã gửi đang được thu thập và lưu trữ. Để biết thêm chi tiết về việc xử lý dữ liệu người dùng, hãy xem Chính sách quyền riêng tư của chúng tôi.</span></label>
                                                </div>
                                                <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                                                    <button type="submit" class="uk-button uk-button-default chitiettintuc__boxComment__btn"><span>Đánh giá</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__item40">
            <div class="home__header">
                <div class="uk-flex-middle uk-grid-24-m" uk-grid>
                    <div class="uk-width-expand">
                        <h3 class="uk-h3 home__header__title">Bán chạy</h3>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="home__header__link uk-button uk-button-default uk-border-pill"><span>Xem tất cả</span></a>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-2 uk-grid-match uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-small uk-grid-30-m" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/spnoibat/img1.png',
                        'title' => 'Solgar ESTER 250 PLUS Kapsul 500MG A50',
                    ),
                    array(
                        'src' => 'images/spnoibat/img2.png',
                        'title' => 'Hand Creams for Dry, Sensitive Skin',
                    ),
                    array(
                        'src' => 'images/spnoibat/img3.png',
                        'title' => 'EllaOne Film-Coated tablet Contraception',
                    ),
                    array(
                        'src' => 'images/spnoibat/img4.png',
                        'title' => 'Ibuprofen 150mg Capsule',
                    ),
                    array(
                        'src' => 'images/spnoibat/img5.png',
                        'title' => 'Bioderma Atoderm Intensive Gel 250ml',
                    ),
                );
                shuffle($data);
                foreach ($data as $k=>$v):
                    $stock = rand(true,false);
                    $isPrice = rand(true,false);
                    $price = array('27.000đ','49.000đ','310.000đ','17.500đ','250.000đ','320.000đ','19.000đ','32.000đ');
                    $percent = array(20,40,60,80,100);
                    $label = array('new','hot','sale','notSale');
                    ?>
                    <div class="home__product__column">
                        <div class="uk-card home__product__card uk-transition-toggle">
                            <div class="uk-grid-match uk-grid-collapse uk-height-1-1 uk-flex-column" uk-grid>
                                <div class="uk-width-1-1">
                                    <div class="uk-cover-container home__product__card__cover">
                                        <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                            <img class="uk-responsive-height uk-responsive-width" src="<?= $v['src'] ?>" alt="">
                                        </div>
                                        <canvas width="468" height="360"></canvas>
                                        <?php if ($stock): ?>
                                            <div class="uk-transition-fade uk-position-cover home__product__card__stock uk-flex uk-flex-middle uk-flex-center">
                                                <div>
                                                    <a href="#modal-quickView" uk-toggle class="home__product__card__stock__icon home__product__card__stock__icon--quick uk-border-circle"></a>
                                                    <a href="" class="home__product__card__stock__icon home__product__card__stock__icon--cart uk-border-circle"></a>
                                                    <a href="#modal-wishList" uk-toggle class="home__product__card__stock__icon home__product__card__stock__icon--wishList uk-border-circle"></a>
                                                </div>
                                            </div>

                                            <?php
                                            $x = $label[array_rand($label)];
                                            switch ($x){
                                                case 'new': ?>
                                                    <span class="home__product__card__label uk-border-pill uk-position-top-left uk-label uk-label-success">Mới</span>
                                                    <?php break; ?>

                                                <?php case 'hot': ?>
                                                <span class="home__product__card__label uk-border-pill uk-position-top-left uk-label uk-label-warning">Hot</span>
                                                <?php break; ?>

                                            <?php case 'sale': ?>
                                                <span class="home__product__card__label uk-border-pill uk-position-top-left uk-label uk-label-danger">-10%</span>
                                                <?php break; ?>

                                            <?php default: ?>

                                            <?php } ?>


                                        <?php else: ?>
                                            <div class="uk-position-cover home__product__card__outStock uk-flex uk-flex-middle uk-flex-center">
                                                <div class="home__product__card__outStock__label uk-border-pill"><span>Hết hàng</span></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-flex-auto uk-padding-small">
                                    <div class="uk-grid-match uk-grid-12 uk-flex-column" uk-grid>
                                        <div class="uk-width-1-1 uk-flex-auto">
                                            <div>
                                                <div class="uk-text-center">
                                                    <div class="uk-position-relative uk-display-inline-block home__product__card__rate">
                                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                        <i class="home__product__card__rate__icon home__product__card__rate__star-o"></i>
                                                        <div class="uk-position-cover uk-text-nowrap uk-position-z-index uk-overflow-hidden" style="width: <?= $percent[array_rand($percent)] ?>%">
                                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                            <i class="home__product__card__rate__icon home__product__card__rate__star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="uk-h3 home__product__card__title"><a href="chitietsanpham.php"><?= $v['title'] ?></a></h3>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <?php if ($isPrice): ?>
                                                <div class="home__product__card__price"><?= $price[array_rand($price)] ?></div>
                                            <?php else: ?>
                                                <div class="home__product__card__contact">Liên hệ</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>