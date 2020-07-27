<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?php /* DATE */ the_date(); ?></span>
            <?php 
                // The parameters are the following: 1: what comes after the tag, 2:what comes in between each tag, 3: what comes at the end.
                the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>

            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php /* Number of comments*/ comments_number(); ?></a></span></div>
    </header>


<?php
    the_content();
?>

<?php
    comments_template();
?>

</div>