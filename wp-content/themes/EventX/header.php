<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EventX</title>
    <?php wp_head(); ?>
</head>
<body>

<header id="header">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:810px;height:300px;overflow:hidden;visibility:hidden;background-color:#000000;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" class="slides" style="cursor:default;position:relative;top:0px;left:0px;overflow:hidden;">
            <?php $artists = get_posts([
                    'post_type' => 'artist',
                    'numberposts' => -1
            ]) ?>

            <?php foreach($artists as $artist) : ?>
                <div class="img-wrapper" data-artist="<?= $artist->ID ?>">
                    <img data-u="image" src="<?= get_the_post_thumbnail($artist->ID) ?>" />
                    <div data-u="thumb">
                        <img class="img-slider" src="<?= get_the_post_thumbnail($artist->ID) ?>" />
                        <audio id="music-<?= $artist->ID ?>" src="<?= get_field('mp3', $artist->ID) ?>"></audio>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container">
        <h1 class="header-title">
            Come and meet your idol
        </h1>

        <span class="d-block">
            Wanna see your favorite artist<br>singing beside of you ?
        </span>

        <?php $customize = get_posts([
                'post_type' => 'customize',
                'numberposts' => 1
        ]) ?>

        <?php foreach($customize as $custom) : ?>
            <a href="<?= get_field('buy_a_ticket', $custom->ID) ?>" target="_blank" class="btn btn-primary">
                Buy a ticket
            </a>
        <?php endforeach; ?>
    </div>
</header>