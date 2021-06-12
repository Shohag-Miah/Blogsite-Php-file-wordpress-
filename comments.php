<?php

/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package carnews
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required())
    return;
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php comments_number(__('<span>No</span> Comments', 'carnews'), __('<span>1</span> Comment', 'carnews'), _n('<span>%</span> Comments', '<span>%</span> Comments', get_comments_number(), 'carnews')); ?>

        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 74,
            ));
            ?>
        </ol><!-- .comment-list -->

        <?php
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php esc_html_e('Comment navigation', 'carnews'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(esc_url('&larr; Older Comments', 'carnews')); ?></div>
                <div class="nav-next"><?php next_comments_link(esc_url('Newer Comments &rarr;', 'carnews')); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation 
        ?>

        <?php if (!comments_open() && get_comments_number()) : ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'carnews'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() 
    ?>

    <?php comment_form(); ?>

</div><!-- #comments -->   