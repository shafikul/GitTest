<?PHP

/* @var $_POST type */
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['emailr']) && isset($_POST['sex'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $emailr = $_POST['emailr'];
    $pass = $_POST['pass'];
    $sex = $_POST['sex'];

    echo "ok";
}

//
//$birthday_month=$_POST['birthday_month'];
//$birthday_day=$_POST['birthday_day'];
//$birthday_year=$_POST['birthday_year'];


