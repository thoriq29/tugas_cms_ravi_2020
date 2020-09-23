<?php get_header(); ?>

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
                            <a href="" class="btn btn-primary full-width">Read more</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>