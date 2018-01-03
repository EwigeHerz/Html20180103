<?php
session_start();


include ('adm_fun_inc.php');
include ('dbConn.inc.php');
$result = $mysqli->query('SELECT id, account, name, email, tel, userType FROM `user`');
if ($mysqli_connect_errno()){
    echo "Connect failed: :" . mysqli_connect_error();
    exit();
}
$count = $result->num_rows;
if (isset($_SESSION['username'])) {
    ?>
    <!doctype html>
    t
    <div id="wrap">
        <?php navBar(2); ?>
        <div id="content">
            <h1>使用者清單(<?php echo $count; ?>)</h1>
            <div class="table-responsive">
                <table class="table table-inverse" style="width: 83%;">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>User Type</th>
                        <th>MEMO</th>
                    </tr>
                    <?php
                    $i = 1;
                    foreach ($result as $user) {
                        ?>
                        <tr <?php
                        switch ($user['userType']) {
                            case 0;
                                echo "class=\"success\"";
                                break;
                            case 1;
                                echo "class=\"danger\"";
                                break;
                            case 3;
                                echo "class=\"warning\"";
                        }
                        ?>>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['tel']; ?></td>
                            <td><?php echo $user['userType']; ?></td>
                            <td>
                                <a class="btn btn-large btn-warning"
                                   href="userupdate.php.?id=<?php echo $user['id']; ?>">UPDATE</a>
                                <a class="btn btn-large btn-danger" onclick="return confirm(Are You Sure?)"
                                   href="userDelete.php?id=<?php echo $user['id']; ?>">DELETE</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <?php footer(); ?>
    </div>
    </body>
    </html>
    <?php
}else{
    ?>
    <script>alert("You Don't Have Permission To Access This Page.");</script>
    <meta http-equiv="REFRESH CONTENT=0;url=index.php">
    <?php
}







/**
 * Created by PhpStorm.
 * User: Andrew Chen
 * Date: 2017/7/25
 * Time: 下午 02:21
 */