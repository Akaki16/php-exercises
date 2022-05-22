<?php include 'inc/header.php' ?>

<?php
    $errors = [];

    if (isset($_POST['submit'])) {
        $quote = filter_input(INPUT_POST, 'quote', FILTER_SANITIZE_SPECIAL_CHARS);
        // wrap quote in quotes
        $changed_quote = str_wrap_quotes($quote);
        $quote_author = filter_input(INPUT_POST, 'quote_author', FILTER_SANITIZE_SPECIAL_CHARS);

        // check if quote or quote author is empty
        if (empty($quote)) {
            $errors['empty_quote'] = 'Quote is required';
        } else {
            $errors['empty_quote'] = '';
        }

        if (empty($quote_author)) {
            $errors['empty_quote_author'] = 'Quote author is required';
        } else {
            $errors['empty_quote_author'] = '';
        }
    }
?>

<div class="container mt-5">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div class="mb-5">
            <label class="form-label" for="quote">What's the quote</label>
            <textarea class="form-control" autocomplete="off" name="quote" id="quote" placeholder="Enter a quote"></textarea>
            <?php if (!empty($errors['empty_quote'])): ?>
                <div class="form-text text-danger">
                    <?php echo $errors['empty_quote'] ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="mb-5">
            <label class="form-label" for="quote_author">Quote Author</label>
            <input class="form-control" type="text" name="quote_author" id="quote_author" placeholder="Enter a quote author">
            <?php if (!empty($errors['empty_quote_author'])): ?>
                <div class="form-text text-danger">
                    <?php echo $errors['empty_quote_author'] ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="mb-5">
            <button style="width: 100%;" name="submit" class="btn btn-primary rounded">
                Submit
            </button>
        </div>
    </form>
</div>

<?php if (isset($changed_quote) && empty($errors['empty_quote']) && empty($errors['alpha_quote'])): ?>
    <div class="container">
        <p class="display-6">
            <?php echo $quote_author . ' ' . 'says' . ' ' . $changed_quote ?>
        </p>
    </div>
<?php endif; ?>

<?php include 'inc/footer.php' ?>