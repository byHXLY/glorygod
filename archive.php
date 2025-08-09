<?php get_header(); ?>
<section class="section">
  <div class="container">
    <h1 class="section-title"><?php the_archive_title(); ?></h1>
    <?php if (have_posts()) : ?>
    <div class="cards-grid">
      <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('card'); ?>>
        <div class="card-body">
          <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="card-description"><?php echo get_the_excerpt(); ?></p>
        </div>
        <div class="card-footer">
          <span class="badge"><?php echo get_the_date(); ?></span>
          <a class="btn btn-ghost btn-sm" href="<?php the_permalink(); ?>">Read &rarr;</a>
        </div>
      </article>
      <?php endwhile; ?>
    </div>
    <?php the_posts_navigation(); ?>
    <?php else : ?>
    <p><?php esc_html_e('No posts found.', 'glorygod'); ?></p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
