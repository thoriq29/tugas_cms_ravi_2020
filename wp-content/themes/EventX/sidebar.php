<aside id="sidebar">
    <div class="content">
        <h3 class="text-center">
            Sponsors
        </h3>
        <?php $sponsors = get_posts([
                'post_type' => 'sponsor',
                'numberposts' => -1
        ]); ?>

        <div class="sponsor-wrapper">
            <?php foreach($sponsors as $sponsor) : ?>
                <div class="sponsor">
                    <img src="<?= get_the_post_thumbnail($sponsor->ID) ?>
                <h4 class="text-center"><?= $sponsor->post_title ?></h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="toggler">
        <span>
            &gt;
        </span>
    </div>
</aside>