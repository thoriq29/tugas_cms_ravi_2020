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
    <div id="jssor_1" style="width:100vw;height:100vh;overflow:hidden;visibility:hidden;background-color:#000000;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" class="slides" style="cursor:default;width:100vw;height:100vh;overflow:hidden;">
            <?php $artists = get_posts([
                    'post_type' => 'artist',
                    'numberposts' => -1
            ]) ?>

            <?php foreach($artists as $artist) : ?>
                <div>
                    <img data-u="image" class="img-slider" src="<?= get_the_post_thumbnail($artist->ID) ?>" />
                    <div data-u="thumb">
                        <img class="i" src="<?= get_the_post_thumbnail($artist->ID) ?>" />
                        <audio id="music-<?= $artist->ID ?>" src="<?= get_field('mp3', $artist->ID) ?>"></audio>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</header>