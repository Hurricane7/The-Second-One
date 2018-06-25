<?php get_header(); ?>
<div class="container-fluid">

  <?php
//  echo 'jestem w page';


  /* Start the Loop */
  while ( have_posts() ) : the_post();

    ?><div class="container" style="padding: 5em"><?php

    the_content();

    ?></div><?php

  endwhile;
  ?>

</div><!-- /.container -->
<?php get_footer(); ?>
