<div id="comments-section">
    @php
        $fields = [
            'author' => '<input placeholder="Name" id="author" name="author" type="text" size="30" required />',

            'email' => '<input placeholder="Email" id="email" name="email" type="email" size="30" required />'
        ];

        $args = [
            'title_reply' => 'Share Your Thoughts',
            'fields' => $fields,
            'comment_field' => '<textarea placeholder="Your Comment" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
            'comment_notes_before' => '<p class="comment-notes">Your email address will not be published. All fields are required.</p>'
        ];

        comment_form($args); 

        $comments_num = get_comments_number();
    @endphp

    @if(count($comments) != 0) 
        <div class="comments">
            <h2>What Others Say</h2>
            <ol class="all-comments">
                @php 
                    wp_list_comments( array(
                        'per_page' =>  15
                    ), $comments);
                @endphp
            </ol>
        </div>
    @endif

</div>