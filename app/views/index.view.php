<?php require('partials/head.php') ?>

<h1>Регистрация</h1>

    <form method="post" action="/users">

        Ваше имя:<input name="name"</input><br>

        Ваше фамилия:<input name="lastname"</input><br>

        Пол:<select name="gender">
            <option>Male</option>
            <option>Female</option>
        </select><br>

        Группа:<input name="group"</input><br>

        Мыло:<input name="email"</input><br>

        Дата рождения:<input name="birthdate"</input><br>

        Баллы ЕГЭ<input name="exam"</input><br>

        Местный?<select name="local">
            <option>Local</option>
            <option>Unlocal</option>
        </select><br>


        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php') ?>