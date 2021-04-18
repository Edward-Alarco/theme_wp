<?php if( !empty($_SERVER['SCRIPT_FILENAME']) && basename($_SERVER['SCRIPT_FILENAME']) == 'comments.php' ): ?>
    <?php die(); ?>
<?php endif; ?>

<?php if( post_password_required() ): ?>
    <p><?php _e('Se necesita constraseña para visualizar el contenido','hotel'); ?></p>
    <?php return; ?>
<?php endif; ?>

<div id="comments">
    <a href="#respond" class="article-add-comment"></a>
    <h3 class="comments-title">
    <?php comments_number( __('Escribe el primer comentario','hotel'), __('Un comentario','hotel'), __('% comentarios','hotel') ) ?>
    </h3>
    <ol id="comments-list">
        <li class="comment even thread-even depth-1" id="comment-1">
            <div id="div-comment-1" class="comment-body">
                <div class="comment-author vcard">
                    <img alt="" src="img/avatar-default.png" class="avatar">
                    <cite class="fn">
                        <a href="" class="url">Mr WordPress</a>
                    </cite>
                    <span class="says">dijo:</span>
                </div>

                <div class="comment-meta commentmetadata">
                    <a href="">June 3, 2013 at 2:40 am</a>
                </div>

                <p>Hi, this is a comment.<br>
                    To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</p>

                <div class="reply">
                    <a class="comment-reply-link" href="">Responder</a>
                </div>
            </div>
        </li><!-- #comment-## -->
    </ol><!-- /#comments-list -->

    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Comparte tu opinión</h3>

        <form action="" method="post" id="commentform" class="comment-form">
            <p class="comment-form-author">
                <label for="author">Nombre <span class="required">*</span></label>
                <input id="author" name="author" type="text">
            </p>

            <p class="comment-form-email">
                <label for="email">Email <span class="required">*</span></label>
                <input id="email" name="email" type="text">
            </p>

            <p class="comment-form-url">
                <label for="url">Sitio web</label>
                <input id="url" name="url" type="text">
            </p>

            <p class="comment-form-comment">
                <label for="comment">Comentario</label>
                <textarea id="comment" name="comment" rows="8"></textarea>
            </p>

            <p class="form-submit">
                <input name="submit" type="submit" id="submit" value="Publicar comentario">
            </p>
        </form>
    </div><!-- #respond -->
</div><!-- /#comments -->