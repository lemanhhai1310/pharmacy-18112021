<?php $data["title"] = "Trang chủ"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="home__item40">
        <div class="uk-container uk-padding-remove">
            <div class="uk-grid-30-m uk-grid-match" uk-grid>
                <div class="uk-width-1-4@m uk-visible@m">
                    <div class="uk-card uk-card-default uk-card-body">

                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-grid-24 uk-grid-25-m uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <div class="home__slider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true">

                                <ul class="uk-slideshow-items">
                                    <li>
                                        <img src="images/slider1.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/slider2.jpg" alt="" uk-cover>
                                    </li>
                                    <li>
                                        <img src="images/light.jpg" alt="" uk-cover>
                                    </li>
                                </ul>

                                <a class="home__slider__nav home__slider__nav--prev uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="home__slider__nav home__slider__nav--next uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                            </div>
                        </div>
                        <div class="uk-width-auto@m home__banner__width">
                            <div class="home__banner__grid uk-child-width-auto uk-grid-small uk-grid-24-m" uk-grid uk-toggle="cls: uk-flex-nowrap; mode: media; media: (max-width: 959.8px)">
                                <?php
                                $data = array(
                                    'images/banner1.jpg',
                                    'images/banner2.jpg',
                                    'images/banner3.jpg',
                                );
                                foreach ($data as $k=>$v): ?>
                                <div class="uk-width-1-1@m home__banner__column">
                                    <div class="home__banner__card uk-cover-container">
                                        <img src="<?= $v ?>" alt="" uk-cover>
                                        <canvas width="380" height="190"></canvas>
                                        <a href="" class="uk-position-cover"></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home__item40">
        <div class="uk-container">
            <!--Nổi bật-->
            <div class="home__item40">
                <div class="home__header">
                    <div class="uk-flex-middle uk-grid-24-m" uk-grid>
                        <div class="uk-width-auto">
                            <h3 class="uk-h3 home__header__title">Nổi bật</h3>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-child-width-auto uk-flex-middle uk-flex-right uk-flex-between@m" uk-grid>
                                <div>
                                    <a href="" class="home__header__link uk-button uk-button-default uk-border-pill"><span>Xem tất cả</span></a>
                                </div>
                                <div class="uk-visible@m">
                                    <ul class="uk-subnav uk-subnav-pill home__header__switch uk-grid-16" uk-grid uk-switcher="connect: .switcher-container">
                                        <li><a href="#">Hãng A</a></li>
                                        <li><a href="#">Hãng B</a></li>
                                        <li><a href="#">Hãng C</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal-quickView" uk-modal>
                    <div class="uk-modal-dialog uk-modal-dialog-m uk-modal-body modal__quickView__body">
                        <button class="uk-modal-close-default header__bottom__close" type="button" uk-close></button>
                        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-37-m" uk-grid>
                            <div>
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
                                                <ul class="uk-thumbnav uk-slider-items uk-child-width-1-4 uk-grid-small uk-grid-16-m uk-grid" uk-grid="" style="transform: translate3d(-111.875px, 0px, 0px);">
                                                    <?php for ($i=0;$i<=6;$i++): ?>
                                                    <li uk-slideshow-item="<?= $i ?>" tabindex="-1">
                                                        <div class="uk-cover-container modal__quickView__left__img">
                                                            <img src="images/h1-product2-featured.png" alt="" uk-cover>
                                                            <canvas width="100" height="100"></canvas>
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
                            <div>
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
                                    <h2 class="uk-modal-title modal__quickView__title">Hand Creams for Dry, Sensitive Skin</h2>
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
                                                <div class="uk-width-expand">
                                                    <button type="button" class="modal__quickView__addCart uk-button uk-button-default uk-border-rounded"><span>Thêm giỏ hàng</span></button>
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
                </div>
                <div id="modal-wishList" uk-modal>
                    <div class="uk-modal-dialog uk-modal-dialog-m uk-modal-body uk-padding-remove">
                        <button class="uk-modal-close-default header__bottom__close" type="button" uk-close></button>
                        <div class="uk-child-width-1-2@m uk-grid-match uk-grid-collapse uk-flex-middle" uk-grid>
                            <div>
                                <div class="uk-cover-container">
                                    <img class="uk-visible@m" src="images/bg_wishList.png" alt="" uk-cover>
                                    <img class="uk-hidden@m" src="images/bg_wishList_mb.png" alt="" uk-cover>
                                    <canvas class="uk-visible@m" width="385" height="433"></canvas>
                                    <canvas class="uk-hidden@m" width="344" height="172"></canvas>
                                    <div class="modal__wishList__mask uk-position-right"></div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-padding-small modal__wishList__box">
                                    <h2 class="uk-modal-title modal__wishList__title">Quan tâm</h2>
                                    <p class="modal__wishList__desc">Vui lòng điền các thông tin bên dưới để đánh dấu quan tâm và chúng tôi được phục vụ bạn tốt hơn</p>
                                    <form>
                                        <fieldset class="uk-fieldset">
                                            <div class="modal__wishList__item">
                                                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                    <select>
                                                        <option value="">Danh xưng</option>
                                                        <option value="1">Ông (Mr.)</option>
                                                        <option value="2">Bà (Mrs.)</option>
                                                    </select>
                                                    <button class="modal__wishList__form__btnSelect uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                                        <span></span>
                                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="modal__wishList__item">
                                                <input class="uk-input modal__wishList__form__input" type="text" placeholder="Họ tên">
                                            </div>
                                            <div class="modal__wishList__item">
                                                <input class="uk-input modal__wishList__form__input" type="tel" placeholder="Số điện thoại">
                                            </div>
                                            <div class="modal__wishList__item">
                                                <input class="uk-input modal__wishList__form__input" type="email" placeholder="Email">
                                            </div>
                                            <div class="modal__wishList__item uk-text-center uk-text-left@m">
                                                <button onclick="wishListNotification()" type="button" class="uk-button uk-button-default modal__wishList__form__btnSend"><span>Gửi</span></button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    // UIkit.modal('#modal-quickView').show();
                    // UIkit.modal('#modal-wishList').show();
                    const notiDefault1 = '<div class="notification__content notification__content--success">' +
                        '<div class="notification__content__txt">Gửi yêu cầu tư vấn thành công. Chúng tôi sẽ liên hệ quý khách trong thời gian sớm nhất.</div>' +
                        '</div>';
                    const wishListNotification = () => {
                        UIkit.notification({
                            message: notiDefault1,
                            status: 'success',
                            pos: 'bottom-left',
                            timeout: 5000
                        });
                        UIkit.modal('#modal-wishList').hide();
                    }
                </script>
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
                        array(
                            'src' => 'images/spnoibat/img6.png',
                            'title' => 'Ibuprofen 250mg capsules x18',
                        ),
                        array(
                            'src' => 'images/spnoibat/img7.png',
                            'title' => 'VICHY LIFTACTIV Supreme Serum 10 30ML',
                        ),
                        array(
                            'src' => 'images/spnoibat/img8.png',
                            'title' => 'Ibuprofen 500mg Capsule',
                        ),
                        array(
                            'src' => 'images/spnoibat/img9.png',
                            'title' => 'Film-coated tablet 250 mg 30 pieces',
                        ),
                        array(
                            'src' => 'images/spnoibat/img10.png',
                            'title' => 'Cetirizine 25mg Film-coated Tablets',
                        ),
                    );
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
                                                <h3 class="uk-h3 home__product__card__title"><a href=""><?= $v['title'] ?></a></h3>
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
            <!--/Nổi bật-->

            <!--banner-->
            <div class="home__item40">

            </div>
            <!--/banner-->
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>