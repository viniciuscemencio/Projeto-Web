            <form role="seach" method="get" action="<?php echo home_url('/'); ?>" class="form-inline">
                        <input class="form-control ml-4 mr-2 search-form" placeholder="Pesquisar no site..." type="search" value="<?php echo get_search_query(); ?>" name="s" />
                        <button class="btn btn-default bg-white" type="submit"><img src=<?php echo get_template_directory_uri() . '/img/pesquisar.png'?> alt=""></button>
             </form>