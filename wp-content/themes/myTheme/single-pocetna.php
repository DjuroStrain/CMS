<div>Ovo je nesto da probamo2</div>

<?php 
    get_header();
    if(have_posts())
    {
        while(have_posts())
        {
            echo the_post();
        }
    }
?>