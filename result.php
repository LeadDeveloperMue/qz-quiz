<?php
include('quiz_data.php');

// Initialize the score to 0
$score = 0;

// Check if the form is submitted and evaluate answers
foreach ($questions as $index => $q) {
    if (isset($_POST['question_' . $index]) && $_POST['question_' . $index] == $q['correct']) {
        $score++;
    }
}

// Set the passing score (22 out of 25)
$passMark = 22;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Quiz Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .card {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #343a40;
        }
        .result-text {
            text-align: center;
            font-size: 1.2rem;
            margin-top: 20px;
        }
        .btn-retry {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
        }
        .btn-retry:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Your Quiz Result</h1>

    <div class="result-text">
        <p>You scored <strong><?php echo $score; ?></strong> out of 25.</p>
        <?php if ($score >= $passMark): ?>
            <p class="text-success"><strong>Congratulations!</strong> You passed the quiz.</p>
        <?php else: ?>
            <p class="text-danger"><strong>Sorry!</strong> You failed. Try again!</p>
        <?php endif; ?>
    </div>

    <a href="index.php" class="btn-retry">Retry</a>
</div>

</body>
</html>
