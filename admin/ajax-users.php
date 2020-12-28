<?php
// RESTRICT ACCESS
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
session_start();
if (!is_array($_SESSION['user'])) {
  die("ERR");
}

// INIT
require PATH_LIB . "lib-users.php";
$usrLib = new Users();

// HANDLE AJAX REQUEST
switch ($_POST['req']) {
    /* [INVALID REQUEST] */
  default:
    die("ERR");
    break;

    /* [SHOW ALL USERS] */
  case "list":
    $users = $usrLib->getAll(); ?>
    <h1>MANAGE USERS</h1>
    <input type="button" value="Add User" onclick="usr.addEdit()" />

    <?php
    if (is_array($users)) {
      echo "<table class='zebra'> 
      <tr><th>id</th>
      <th>name</th>
      <th>username</th>
      <th>email</th>
      <th>verified</th>
      <th> </th></tr>";
      foreach ($users as $u) {
        printf(
          "<tr><td>%s</td><td>%s</td>
          <td>%s</td><td>%s</td>
          <td>%s</td><td class='right'>"
            . "<input type='button' value='Delete' onclick='usr.del(%u)'>"
            . "</td></tr>",
          $u['id'],
          $u['name'],
          $u['username'],
          $u['email'],
          $u['verified'],
          $u['id']
        );
      }
      echo "</table>";
    } else {
      echo "<div>No users found.</div>";
    }
    break;

    /* [ADD/EDIT USER DOCKET] */
  case "addEdit":
    ?>
    <h1>ADD USER</h1>
    <form onsubmit="return usr.save()">
      <label for="usr_name">Name:</label>
      <input type="text" id="usr_name" required />
      <label for="usr_username">Username:</label>
      <input type="text" id="usr_username" required />
      <label for="usr_email">Email:</label>
      <input type="text" id="usr_email" required />
      <label for="usr_password">Password:</label>
      <input type="password" id="usr_password" required minlength="6" />
      <input type="button" value="Cancel" onclick="usr.list()" />
      <input type="submit" value="Save" />
    </form>
<?php break;

    /* [ADD USER] */
  case "add":
    echo $usrLib->add($_POST['email'], $_POST['name'], $_POST['password'], $_POST['username']) ? "OK" : "ERR";
    break;

    /* [DELETE USER] */
  case "del":
    echo $usrLib->del($_POST['id']) ? "OK" : "ERR";
    break;
}
?>