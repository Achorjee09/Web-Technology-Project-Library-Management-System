<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Question</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="wrapper">
        <h2>Answer Security Question</h2>
        <form action="securityQuestionProcess.php" method="POST">
            <div class="input-field">
                <input type="text" name="uname" required>
                <label>Username</label>
            </div>
            <div class="input-field">
                <input type="text" name="sec_ans" required>
                <label>What is your favourite colour?</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
