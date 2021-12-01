<div class="home__header">
    <div class="uk-flex-middle uk-grid-24-m" uk-grid>
        <div class="uk-width-expand">
            <h3 class="uk-h3 home__header__title">Tin tức</h3>
        </div>
        <div class="uk-width-auto">
            <a href="" class="home__header__link uk-button uk-button-default uk-border-pill"><span>Xem tất cả</span></a>
        </div>
    </div>
</div>
<div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-16 uk-grid-30-m" uk-grid>
    <?php
    $dataNews = array(
        array(
            'src' => 'images/news1.png',
            'txt' => 'Tầm soát ung thư - Giải pháp bảo vệ sức khoẻ toàn diện',
        ),
        array(
            'src' => 'images/news2.png',
            'txt' => 'Dạy con cách tự bảo vệ bản thân trước những nguy hiểm',
        ),
        array(
            'src' => 'images/news3.png',
            'txt' => 'Sản phẩm bảo hiểm tốt nhất cho gia đình hiện nay',
        ),
        array(
            'src' => 'images/news4.png',
            'txt' => 'Khám sức khỏe định kỳ - Giải pháp chăm sóc sức khỏe toàn diện',
        ),
    );
    shuffle($dataNews);
    foreach ($dataNews as $k=>$v): ?>
        <div>
            <div class="uk-cover-container home__tintuc__coverContainer">
                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                <canvas width="600" height="338"></canvas>
            </div>
            <h4 class="uk-h4 home__tintuc__title"><a href=""><?= $v['txt'] ?></a></h4>
            <div class="home__tintuc__date">Thứ 2 ,08/07/2019</div>
        </div>
    <?php endforeach; ?>
</div>