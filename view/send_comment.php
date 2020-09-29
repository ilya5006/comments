<div id="comment_form">
    <h2 id="leave_comment">Оставить комментарий</h2>

    <form method="POST" action="model/add_comment.php">
        <p>Ваше имя</p>
        <input type="text" name="username" required>
        <p>Ваш комментарий</p>
        <textarea name="comment" required></textarea>
        <input type="submit" value="Отправить">
    </form>
</div>
