<?php
if ($result == FALSE) {
    echo '<h1>there is no students </h1>';
} else {
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>username</th>
                <th>status</th>
                <th>full name</th>
                <th>email</th>
                <th>phone</th>
                <th>grade</th>
            </tr>
        </thead>
        tbody><?php
    foreach ($resulte as $key) {
        for ($index = 0; $index < count($key); $index++) {
            ?>
                <tr class="gradeA odd">
                    <td class=" sorting_1"><input class="userid" name="userid" type="hidden" value="<?php echo $key->id; ?>">
                        <input class="username" name="username" style="width: 90px" type="text" value="<?php echo $key->username; ?>"></td>
                    <td><input class="status" name="status" style="width: 90px" type="text" value="<?php echo $key->status; ?>"></td>
                    <td><input class="fullname" name="fullname" style="width: 90px" type="text" value="<?php echo $key->fullname; ?>"></td>
                    <td><input class="gender" name="gender" style="width: 90px" type="text" value="<?php echo $key->gender; ?>"></td>
                    <td><input class="email" name="email" style="width: 90px" type="text" value="<?php echo $key->email; ?>"></td>
                    <td><input class="phone" name="email" style="width: 90px" type="text" value="<?php echo $key->phone; ?>"></td>
                </tr>
            <?php
        }
    }
    ?>
    </tbody>
    </table>


    <?php
}
?>