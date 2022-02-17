function onClickAddCommentButton() {
    let comment = {};
    comment.nickname = $('#pseudo').val();
    comment.comment = $('#comment').val();
    comment.postId = $('#postId').val();
    

    $.post('add_comment.php', {data: comment}, (response) => {
        const comments = JSON.parse(response);
        const $li = $('<li>')
        $li.addClass("list-group-item bg-dark");
        $('<i>').addClass('fa fa-comment').attr('aria-hidden', 'true').appendTo($li);
        $li.append('Rédigé par ');
        $('<strong>').text(comments[0].NickName).appendTo($li);
        $('<div>').addClass('py-2').text(comments[0].Contents).appendTo($li);
        if (comments.length === 1) {
            $('aside#commentList p').hide();
            $('<small>').text('(1)').appendTo('aside#commentList h2');
            const $ul = $('<ul>');            
            $ul.append($li).insertAfter('aside#commentList h2');
        } else {
            $('aside#commentList ul').append($li);
            $('aside#commentList h2 small').text('(' + comments.length + ')');
        }
        $('#new-comment-form').trigger('reset');
    });
}