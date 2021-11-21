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
                <div id="modal-quickView" uk-modal>
                    <div class="uk-modal-dialog uk-modal-dialog-m uk-modal-body">
                        <button class="uk-modal-close-default header__bottom__close" type="button" uk-close></button>
                        <h2 class="uk-modal-title">Default</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <script>
                    UIkit.modal('#modal-quickView').show();
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
                                                <a href="javascript:void(0)" class="home__product__card__stock__icon home__product__card__stock__icon--wishList uk-border-circle"></a>
                                            </div>
                                        </div>
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