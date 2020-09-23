<?php get_header(); ?>

<?php $customize = get_posts([
    'post_type' => 'customize',
    'numberposts' => 1
]); ?>

<main id="main">
    <section id="news">
        <div class="container">
           <div class="header text-center">
               <h3 class="section-header">
                   News
               </h3>
               <span>
                   All information about event in here
               </span>
           </div>

            <div class="content">
                <?php $data_news = get_posts([
                        'post_type' => 'news',
                        'numberposts' => 3
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
                            <a href="" class="btn btn-secondary full-width">Read more</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="save_date">
        <div class="container">
            <h2>Let us remind you when the event will begin</h2>
            <h4>Event will begin at</h4>
            <?php foreach($customize as $custom) : ?>
                <span class="d-block">
                    <?php
                        $now = new DateTime();
                        $event_date = new DateTime(get_field('event_date', $custom->ID));

                        echo $event_date->format('Y');
                    ?>
                </span>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>