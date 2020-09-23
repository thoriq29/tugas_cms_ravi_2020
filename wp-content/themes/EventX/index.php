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
                            <a href="<?= get_the_permalink($news->ID) ?>" class="btn btn-secondary full-width">Read more</a>
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
                <span class="d-block countdown">
                    <?php
                        $now = new DateTime();
                        $event_date = new DateTime(get_field('date_event', $custom->ID));
                        $date_diff = date_diff($now, $event_date);
                    ?>

                    <span id="days"><?= $date_diff->format('%a Days') ?> |</span>
                    <span id="hours"><?= $date_diff->format('%h Hours') ?> |</span>
                    <span id="minutes"><?= $date_diff->format('%i Minutes') ?> |</span>
                    <span id="seconds"><?= $date_diff->format('%s Seconds') ?></span>
                </span>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="aboutUs">
        <div class="container">
            <div class="header text-center">
                <div class="section-header">
                    About Us
                </div>
                <span class="d-block">
                    This is a short bio of our company
                </span>
            </div>

            <div class="content">
                <div class="img-company">
                    <img src="<?= get_template_directory_uri() . '/assets/images/company.jpg' ?>" alt="">
                </div>
                <p>
                    <strong>EventX</strong> is a company based on music event. Ab consequuntur dolor dolores ea eveniet labore laborum neque odio placeat quas qui quisquam quod tempore, temporibus totam vel voluptatibus. Facilis, iusto. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem impedit itaque rem. Animi consequatur doloremque doloribus excepturi nesciunt numquam omnis perferendis, praesentium qui quo quod rerum saepe tempora ullam unde? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, consectetur distinctio dolore enim eos esse laboriosam natus perferendis perspiciatis quia quo quos tempore. Amet asperiores laudantium maiores molestiae velit!
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>