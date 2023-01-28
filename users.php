<?php include 'utils/header.php'; ?>


<?php
    $sql = 'SELECT * FROM users';
    $result = mysqli_query($connection, $sql);
    $users= mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php foreach($users as $item) : ?>

<div class="container mx-auto flex flex-row items-center justify-center">
    <div class="">
        <h1>
            <?php echo $item['name']; ?>
        </h1>
    </div>
</div>

<?php endforeach; ?>

<?php

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$role = $_POST['role'];

$newUser = new User($name, $age, $email, $role);
echo $newUser->getInfos();
echo $newUser->PostData($connection);

?>

<?php

    // $sql = "INSERT INTO users (name, age, email, role) VALUES ('$name', '$age', '$email', '$role')";
    // if(mysqli_query($connection,$sql)){
    //     header('Location: users.php');
    // }
    // else {
    //      echo 'Error : ' . mysqli_error($connection);
    // }

?>

<?php include 'utils/footer.php'; ?>