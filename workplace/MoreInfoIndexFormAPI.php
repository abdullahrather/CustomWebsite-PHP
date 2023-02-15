<?php

require_once "db_connection.php";

// initialize variables for the messages and class
$success_message = '';
$error_message = '';
$class = '';

// process the form submission
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['data']['MoreInfo']['firstname'];
    $lastname = $_POST['data']['MoreInfo']['lastname'];
    $email = $_POST['data']['MoreInfo']['email'];
    $phone = $_POST['data']['MoreInfo']['phone'];
    $message = $_POST['data']['MoreInfo']['massage'];

    // prepare the statement
    $stmt = $pdo->prepare("INSERT INTO more_info (firstname, lastname, email, phone, message) VALUES (?, ?, ?, ?, ?)");

    // bind the parameters
    $stmt->bindParam(1, $firstname);
    $stmt->bindParam(2, $lastname);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $phone);
    $stmt->bindParam(5, $message);

    // execute the statement
    if($stmt->execute()) {
        // successfully submitted
        $success_message = "Thank You for getting in touch with us, we recieved your request. We will get back to you soon!";
        $class = 'success';
    } else {
        // there was an error
        $error_message = "Error establishing connection, we appologise for the inconvenience please resubmit your query!";
        $class = 'error';
    }
}
?>

<!-- Display the success or error message -->
<?php if(!empty($success_message)): ?>
    <div class="<?php echo $class; ?>">
        <?php echo $success_message; ?>
    </div>
<?php endif; ?>

<?php if(!empty($error_message)): ?>
    <div class="<?php echo $class; ?>">
        <?php echo $error_message; ?>
    </div>
<?php endif; ?>

<style>
.success {
    background-color: #d4edda;
    color: #155724;
    padding: 1rem;
    margin-bottom: 1rem;
    border: 1px solid #c3e6cb;
    border-radius: .25rem;
    font-weight: bold;
}

.error {
    background-color: #f8d7da;
    color: #721c24;
    padding: 1rem;
    margin-bottom: 1rem;
    border: 1px solid #f5c6cb;
    border-radius: .25rem;
    font-weight: bold;
}
</style>
