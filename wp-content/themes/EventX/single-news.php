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

<?php get_sidebar(); ?>

<header id="news-header">
    <div class="header">
        <div class="container">
            <h1>
                <?= the_title() ?>
            </h1>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>
                <?= the_content(); ?>
            </p>
        </div>
    </div>
</header>

<section id="news">
    <div class="container">
        <div class="header text-center">
            <h3 class="section-header">
                News
            </h3>
            <span>
                Let see another news below
            </span>
        </div>

        <div class="content">
            <?php
            $id = get_the_ID();
            $data_news = get_posts([
                'post_type' => 'news',
                'numberposts' => 3,
                'exclude'  => array( $id ),
            ]) ?>

            <?php foreach($data_news as $news) : ?>
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            <?= $news->post_title ?>
                        </h1>
                        <p>
                            <?= substr($news->post_content, 0, 150) ?>...
                        </p>
                        <a href="<?= get_the_permalink($news->ID) ?>" class="btn btn-secondary full-width">Read more</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
</body>
</html>