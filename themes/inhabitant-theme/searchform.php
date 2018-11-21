<script type="text/javascript" src=<?php echo get_template_directory_uri()."/build/js/toggle-search.min.js" ?>> </script>

<div class="header-search">
    
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <fieldset>
        <a href="#" class="search-toggle" >
			<i class="fas fa-search"></i></a>
            <label id="searchInput" style="display:none">
                <input type="search" id="searchthing" onfocusout="myFunction()" placeholder="TYPE AND HIT ENTER..." class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
            </label>
            <input type="submit" id="search-submit" class="screen-reader-text" value="Search"/>
        </fieldset>
    </form>

</div>