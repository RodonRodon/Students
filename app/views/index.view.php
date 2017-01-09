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


    <table>
        <?php foreach ($users as $user): ?>

            <tr>

                <td> <?= $user->name; ?> </td>

                <td> <?= $user->lastname; ?> </td>

                <td> <?= $user->gender; ?> </td>

                <td> <?= $user->groups; ?> </td>

                <td> <?= $user->birthdate; ?> </td>

                <td> <?= $user->exam; ?> </td>

                <td> <?= $user->local; ?> </td>

                <td> <?= $user->email; ?> </td>


            </tr>                                                                                                                                                                                                                                                                                        "<td>" . $user->local . "</td>";
        <?php endforeach; ?>
    </table>

<?php require('partials/footer.php') ?>