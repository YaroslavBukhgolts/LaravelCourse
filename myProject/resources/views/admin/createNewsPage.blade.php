<div>
    <h2>Страница создания новостей</h2>
    <form action="#">
        <fieldset>
            <legend>Форма для создания новости</legend>
                <input type="text" name="newsTitle">Новостной заголовок<br><br>
                <textarea name="newsText" cols="30" rows="10">Текст новости</textarea><br><br>
                <input type="text" name="newsDescrition"> Краткое описание<br><br>
                <input type="button" value="Опубликовать">
        </fieldset>
    </form>
    <a href="{{ '/admin' }}">Назад</a>
</div>