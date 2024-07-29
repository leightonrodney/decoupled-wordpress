<?php
get_header(); // Include header.php
?>

<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content(); // Display the content of the post
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>

<?php
get_footer(); // Include footer.php
?>