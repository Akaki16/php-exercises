<?php include 'inc/header.php' ?>

<?php
    $message;

    if (isset($_POST['submit'])) {
        // get the input value
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

        if ($name === '') {
            $message = 'Your name is required';
        }
    }
?>

<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input autocomplete="off" type="text" name="name" id="name" placeholder="Please enter your name">
        <br />
        <?php if (isset($message)): ?>
            <span>
                <?php echo $message ?>
            </span>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <button name="submit" type="submit">
            Submit
        </button>
    </div>
</form>

<?php if (isset($name) && $name !== ''): ?>
    <div class="message">
        <p>
            <?php echo 'Hello' . ' ' . $name ?>
        </p>
    </div>
<?php endif; ?>

<?php include 'inc/footer.php' ?>