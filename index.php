<?php
include('quiz_data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add favicon link -->
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon." type="image/x-icon">
    <title>Driving Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-min.css">
</head>
<body>

<h1>Driving Quiz</h1>
<form action="result.php" method="POST">
    <?php foreach ($questions as $index => $q): ?>
        <fieldset>
            <legend><?php echo ($index + 1) . '. ' . $q['question']; ?></legend>
            <?php foreach ($q['options'] as $key => $option): ?>
                <label>
                    <input type="radio" name="question_<?php echo $index; ?>" value="<?php echo $key; ?>" required>
                    <?php echo chr(97 + $key) . '. ' . $option; ?>
                </label><br>
            <?php endforeach; ?>
        </fieldset>
    <?php endforeach; ?>
    <button type="submit">Submit</button>
</form>
<?php include('footer.php'); ?>
</body>
</html>
