<div id="comments">
    <?php
    foreach ($comments as $comment):
    ?>
    <div class="comment">
        <div class="comment_user-info">
            <p class="comment_username"><?=$comment->getUsername()?></p>
            <div class="comment_time-info">
                <span class="comment_time"><?=$comment->getTime()?></span>
                <span class="comment_date"><?=$comment->getDate()?></span>
            </div>
        </div>

        <p class="comment_text">
            <?=$comment->getText()?>
        </p>
    </div>
    <?php
    endforeach;
    ?>
</div>
