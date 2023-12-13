    <div class="container" style="margin-top: 12px">
        <form action="../../../backend/functions/upload_comment.php" method="post">
            <div class="comment_section">
                <div class="input_comment" id="commentsong">
                    @if (!empty($user->id))
                            <input class="input_text-field" type="text" name="comment" placeholder="Write a comment">
                            <input class="input_button" type="submit" value="Post">
                    @else
                            <div class="text_page-title">You must be logged in to comment</div>
                    @endif
                </div>
            </div>
        </form>
    </div>