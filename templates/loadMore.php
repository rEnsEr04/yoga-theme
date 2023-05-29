            <?php
                $current_page = !empty( $_GET['blog'] ) ? $_GET['blog'] : 1;
                
                $args = array(
                    'post_type' => 'blogposts',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'paged' => $current_page
                );
                $Blog = new WP_Query($args);
                while($Blog -> have_posts()) : $Blog -> the_post();

                echo paginate_links( array(
                    'base' => site_url() . '%_%',
                    'format' => '?blog=%#%',
                    'total' => $Blog->max_num_pages,
                    'current' => $current_page,
                ) );
            ?>