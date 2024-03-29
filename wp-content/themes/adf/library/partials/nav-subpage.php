

<section class="bg-gray-dark">
  <div class="container">

    <div class="row">
      <div class="span12">

        <?php
          if(!function_exists('get_post_top_ancestor_id')){
            function get_post_top_ancestor_id(){
            global $post;

            if($post->post_parent){
              $ancestors = array_reverse(get_post_ancestors($post->ID));
              return $ancestors[0];
            }

            return $post->ID;
          }}
        ?>
        <nav class="nav-secondary">
          <ul class="list-inline">
            <?php wp_list_pages( array('title_li'=>'','include'=>get_post_top_ancestor_id()) ); ?>
            <?php wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
          </ul>
        </nav>

      </div>
    </div>

  </div>
</section>