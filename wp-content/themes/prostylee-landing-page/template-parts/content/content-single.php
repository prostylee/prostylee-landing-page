<article id="post-<?php the_ID(); ?>" <?php post_class('post-entry'); ?>>
  <div class="row">
      <div class="col-md-12 col-sm-12 post-full-width-image">
          <img src="<?php echo catch_that_image();?>" class="img img-responsive"/>
      </div>
      <!-- end post-full-width-image -->
  </div>
  <!-- end row -->
  <div class="row">
      <div class="col-md-3 col-sm-12 post-sidebar">

      </div>
      <!-- end post-sidebar -->
      <div class="col-md-9 col-sm-12 post-content">
        <header class="entry-header alignwide">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
          <div class="post-author">
              <span class="avatar"><?php echo get_avatar(  the_author_meta(), '40' );?></span>
              <span class="display-name">
                  <?php the_author_link();?>
              </span>
              <span class="post-date"> - <?php the_date()?></span>
          </div>
          <!-- end post-author -->
        <div class="post-inner-content">
            <?php the_content();?>
        </div>
        <!-- end post-inner-content -->
          <div class="post-tags">
              <ul class="list">
                  <?php
                  $tags = is_array(get_the_tags($post->ID)) ? get_the_tags($post->ID) : array();
                  $categories = is_array(get_the_category($post->ID)) ? get_the_category($post->ID) : array();
                  $tags_categories = array_merge($tags, $categories);
                  $html = "";
                  if ($tags_categories) {
                      foreach($tags_categories as $item) {
                          $link = get_tag_link($item -> term_id);
                          $html.= "<li><a href='${link}' class='{$item->slug}' title='{$item->name}'>";
                          $html.= "{$item->name}</a></li>";
                      }
                  }
                  echo $html;
                  ?>
              </ul>
          </div>
          <!-- end post-tags -->
      </div>
      <!-- end post-content -->
  </div>
</article><!-- #post-item-page-<?php the_ID(); ?> -->
