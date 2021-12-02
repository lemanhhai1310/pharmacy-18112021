<?php $data["title"] = "Chi tiết tuyển dụng"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Tuyển dụng',
        'link' => 'tuyendung.php',
    ),
    array(
        'txt' => 'Chi tiết tuyển dụng',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php";
?>
<div class="tuyendung__section chitiettuyendung__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="home__item40">
            <div class="uk-grid-small uk-grid-30-m" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-card uk-card-default uk-card-body chitiettuyendung__cardLeft">
                        <div>
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 tintuc__title">Nhân viên bán hàng</h1>
                                </div>
                                <div class="uk-width-auto">
                                    <a href="#" class="tuyendung__table__btn uk-button uk-button-default uk-active"><span>Ứng tuyển ngay</span></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="footer__center__item24">
                                <div class="footer__center__item16">
                                    <h3 class="uk-h3 chitiettuyendung__cardRight__title">Mô tả</h3>
                                </div>
                                <div class="footer__center__item16">
                                    <article class="uk-article chitiettuyendung__cardLeft__article">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec tellus eget nibh viverra ullamcorper. Pellentesque ante velit, sollicitudin ac posuere ac, elementum at quam. Donec vestibulum eros ex, vel sollicitudin mi imperdiet finibus. Sed cursus risus sit amet est bibendum, in hendrerit quam lacinia. Aliquam tincidunt arcu eu lorem accumsan, eget venenatis nulla pellentesque. Aenean ut diam vitae magna dictum pulvinar non sed odio. Nulla a purus laoreet, tincidunt arcu ac, ornare ligula. Nam vitae cursus diam. Praesent iaculis sem quis purus blandit, a hendrerit dolor molestie. Aliquam non feugiat nisi, at ullamcorper arcu. Duis consequat pharetra arcu. Nunc suscipit nulla felis, ornare facilisis massa vestibulum ac.</p>
                                    </article>
                                </div>
                            </div>
                            <div class="footer__center__item24">
                                <div class="footer__center__item16">
                                    <h3 class="uk-h3 chitiettuyendung__cardRight__title">Yêu cầu</h3>
                                </div>
                                <div class="footer__center__item16">
                                    <article class="uk-article chitiettuyendung__cardLeft__article">
                                        <p>_ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec tellus eget nibh viverra ullamcorper. Pellentesque ante velit, sollicitudin ac posuere ac, elementum at quam. _ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec tellus eget nibh viverra ullamcorper. Pellentesque ante velit, sollicitudin ac posuere ac, elementum at quam.</p>
                                        <p>_ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec tellus eget nibh viverra ullamcorper. Pellentesque ante velit, sollicitudin ac posuere ac, elementum at quam.</p>
                                        <p>_ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec tellus eget nibh viverra ullamcorper. Pellentesque ante velit, sollicitudin ac posuere ac, elementum at quam.</p>
                                    </article>
                                </div>
                            </div>
                            <div class="footer__center__item24">
                                <div class="footer__center__item16">
                                    <h3 class="uk-h3 chitiettuyendung__cardRight__title">QUyền lợi</h3>
                                </div>
                                <div class="footer__center__item16">
                                    <article class="uk-article chitiettuyendung__cardLeft__article">
                                        <p>Praesent viverra volutpat felis, in tincidunt augue facilisis et. Donec malesuada congue quam eu sollicitudin. Phasellus at metus quis tellus lacinia rhoncus id non est. Fusce porta ex egestas sem fermentum, nec fermentum eros porta. Phasellus ornare ac neque at cursus. Nam et mi a mi feugiat egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut vitae diam accumsan, venenatis erat id, facilisis urna. Sed ac lacus sed sem aliquet vulputate at eu nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra justo sit amet ipsum lacinia, et consectetur lectus malesuada. Vestibulum justo leo, sollicitudin eget ante eget, feugiat vehicula magna. Nam tincidunt eleifend eros, in pellentesque est porta a. Etiam lobortis convallis porttitor. Donec in quam sit amet augue commodo mollis. Nunc suscipit nulla felis, ornare facilisis massa vestibulum ac.</p>
                                    </article>
                                </div>
                            </div>
                            <div class="footer__center__item24">
                                <div class="footer__center__item16">
                                    <h3 class="uk-h3 chitiettuyendung__cardRight__title">Yêu cầu hồ sơ</h3>
                                </div>
                                <div class="footer__center__item16">
                                    <article class="uk-article chitiettuyendung__cardLeft__article">
                                        <p>Praesent viverra volutpat felis, in tincidunt augue facilisis et. Donec malesuada congue quam eu sollicitudin. Phasellus at metus quis tellus lacinia rhoncus id non est. Fusce porta ex egestas sem fermentum, nec fermentum eros porta. Phasellus ornare ac neque at cursus. Nam et mi a mi feugiat egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="footer__center__item24">
                                <h2 class="uk-h2 tintuc__title uk-text-center">Ứng tuyển ngay</h2>
                            </div>
                            <div class="footer__center__item24">
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
                                        <input class="uk-input modal__wishList__form__input" type="text" placeholder="Tên người ứng tuyển *">
                                    </div>

                                    <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                        <input class="uk-input modal__wishList__form__input" type="text" placeholder="Số điện thoại *">
                                    </div>
                                    <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                        <input class="uk-input modal__wishList__form__input" type="text" placeholder="Email">
                                    </div>

                                    <div class="uk-width-1-2@s chitiettintuc__boxComment__column">
                                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Vị trí ứng tuyển *</option>
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
                                                <option value="">Địa điểm ứng tuyển *</option>
                                                <option value="1">Ông (Mr.)</option>
                                                <option value="2">Bà (Mrs.)</option>
                                            </select>
                                            <button class="modal__wishList__form__btnSelect uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                                <span></span>
                                                <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                                        <div class="uk-width-1-1" uk-form-custom>
                                            <input type="file">
                                            <div class="tuyendung__section1__boxFile">
                                                <span>Ấn vào đây để chọn File CV *</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 chitiettintuc__boxComment__column">
                                        <div class="uk-text-center">
                                            <button type="button" class="uk-button uk-button-default modal__wishList__form__btnSend"><span>Gửi</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="chitiettuyendung__cardRight uk-card uk-card-body uk-card-default uk-position-z-index" uk-sticky="offset: 100; bottom: true">
                        <div>
                            <h3 class="uk-h3 chitiettuyendung__cardRight__title">Tóm tắt công việc</h3>
                        </div>
                        <div>
                            <table class="chitiettuyendung__cardRight__table uk-table uk-table-small">
                                <tbody>
                                <?php
                                $data = array(
                                    array(
                                        'txt1' => 'Vị trí:',
                                        'txt2' => 'Nhân viên bán hàng',
                                    ),
                                    array(
                                        'txt1' => 'Ngày bắt đầu:',
                                        'txt2' => '09/10/2019',
                                    ),
                                    array(
                                        'txt1' => 'Số lượng:',
                                        'txt2' => '0/1 người',
                                    ),
                                    array(
                                        'txt1' => 'Kinh nghiệm:',
                                        'txt2' => '2-3 năm',
                                    ),
                                    array(
                                        'txt1' => 'Địa điểm:',
                                        'txt2' => 'Hà Nội',
                                    ),
                                    array(
                                        'txt1' => 'Mức lương:',
                                        'txt2' => 'Cạnh tranh',
                                    ),
                                    array(
                                        'txt1' => 'Hạn nộp hồ sơ:',
                                        'txt2' => '31/12/2019',
                                    ),
                                );
                                foreach ($data as $item): ?>
                                <tr>
                                    <th><?= $item['txt1'] ?></th>
                                    <td><?= $item['txt2'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home__item40">
            <div class="footer__center__item24">
                <div class="footer__center__item16">
                    <div class="uk-flex-middle" uk-grid="">
                        <div class="uk-width-expand">
                            <h2 class="uk-h2 tintuc__title">Các vị trí đang tuyển</h2>
                        </div>
                        <div class="uk-width-auto">
                            <span class="chitiettintuc__boxComment__checkTxt">Hiển thị 5/10 kết quả</span>
                        </div>
                    </div>
                </div>
                <div class="footer__center__item16">
                    <table class="uk-table uk-table-divider uk-table-middle uk-table-small uk-table-responsive tuyendung__table" uk-toggle="cls: uk-table-hover; mode: media; media: @m">
                        <tbody>
                        <?php

                        for ($i=0;$i<=4;$i++): ?>
                        <tr>
                            <td>
                                <div class="tuyendung__table__title"><a href="">Nhân viên bán hàng</a></div>
                            </td>
                            <td>
                                <div class="tuyendung__table__catalog"><span class="tuyendung__table__txt">Chuyên viên</span></div>
                            </td>
                            <td>
                                <div class="tuyendung__table__map"><span class="tuyendung__table__txt">Hà Nội</span></div>
                            </td>
                            <td>
                                <span class="tuyendung__table__txt">Hạn nộp: 31/12/2020</span>
                            </td>
                            <td>
                                <a href="chitiettuyendung.php" class="tuyendung__table__btn uk-button uk-button-default"><span>Ứng tuyển ngay</span></a>
                            </td>
                        </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>