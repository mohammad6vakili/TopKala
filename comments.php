<div class="comments-wrapper">


<div class="comments" id="comments">


    <div class="comments-header">

        <h2 class="comment-reply-title">
            <?php
                if(!have_comments()){
                   echo "دیدگاه خود را بیان کنید";
                }else{
                    echo get_comments_count()."دیدگاه";
                }
            ?>
        </h2><!-- .comments-title -->

    </div><!-- .comments-header -->

    <div class="comments-inner">
        <?php
            array(
                'avatar_size'=>120,
                'style'=>'div',
            )
        ?>
    </div><!-- .comments-inner -->

</div><!-- comments -->

<hr class="" aria-hidden="true">
    <?php
        if(comments_open()){
            comment_form(
                array(
                    'class-form'=>''
                )
            );
        }
    ?>
</div>

</div>