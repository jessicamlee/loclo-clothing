<?php 

    $spring22collect = FeatureProducts::find_all();

?><section class="feature-products container section-padding" data-aos="fade-up">
    <div class="page-title">
        <h2>Spring Local 2022</h2>
        <p>Locally made in Canada for timeless comfort and style&period;</p>
    </div>
    <?php include('filter.php'); ?>
    <ul class="new-items is-flex">
        <?php while($spring22 = $spring22collect->fetch_assoc()): ?>
            <li>
                <img class="box-shadow" src="../images/<?php echo h($spring22['product_img']); ?>" alt="<?php echo h($spring22['image_alt']); ?>">
                <h3><?php echo h($spring22['product_name']); ?></h3>
                <p>$<?php echo h($spring22['product_price']); ?></p>
            </li>
        <?php endwhile; ?>
    </ul>
    <div class="is-flex" data-aos="fade-up" data-aos-delay="200">
        <a class="btn box-shadow" href="#" title="Load more clothes">Load more</a>
    </div>
</section>