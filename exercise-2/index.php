<?php include 'inc/header.php' ?>

<?php
    $errors = [];

    if (isset($_POST['submit'])) {
        $text = htmlspecialchars($_POST['text']);
        $text = str_remove_space($text);

        // check if text is empty
        if (empty($text)) {
            $errors['empty_text'] = 'Text is required';
        } else {
            $errors['empty_text'] = '';
        }

        // check if text only contains 
        if (!ctype_alpha($text)) {
            $errors['alpha_text'] = 'Text must only contain alphabet characters';
        } else {
            $errors['alpha_text'] = '';
        }
    }
?>

<div class="container mt-5">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div class="mb-5">
            <label class="form-label" for="text">Text</label>
            <input class="form-control" autocomplete="off" type="text" name="text" id="text" placeholder="Enter a text">
            <?php if (!empty($errors['empty_text'])): ?>
                <div class="form-text text-danger">
                    <?php echo $errors['empty_text'] ?>
                </div>
            <?php elseif (!empty($errors['alpha_text'])): ?>
                <div class="form-text text-danger">
                    <?php echo $errors['alpha_text'] ?>
                </div>
            <?php endif; ?>
            <br />
            <button style="width: 100%;" class="btn btn-success rounded" name="submit" type="submit">
                Submit
            </button>
        </div>
    </form>
</div>

<?php if (isset($text) && empty($errors['empty_text']) && empty($errors['alpha_text'])): ?>
    <div class="container text-center">
        <p class="display-6">
            <?php echo $text . ' ' . 'has' . ' ' . str_length($text) . ' ' . 'characters' ?>
        </p>
    </div>
<?php endif; ?>

<?php include 'inc/footer.php' ?>