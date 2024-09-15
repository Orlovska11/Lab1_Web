<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Копійочка</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <h1>Визначення правильної форми слова "копійка"</h1>

    <?php
    // Інформація про розробника
    $developer_group = "Група: СТ-41";
    $developer_name = "ПІБ: Орловська Анастасія Віталіївна";
    $creation_date = "Дата створення документа: 13 вересня 2024";
    $current_date = date("d.m.Y");

    echo "<p>$developer_group</p>";
    echo "<p>$developer_name</p>";
    echo "<p>$creation_date</p>";
    echo "<p>Поточна дата: $current_date</p>";
    
    // Функція для визначення форми слова "копійка"
    function getKopiykaForm($number) {
        $last_digit = $number % 10;
        $last_two_digits = $number % 100;

        switch (true) {
            case ($last_two_digits >= 11 && $last_two_digits <= 19):
                return "копійок";
            case ($last_digit == 1):
                return "копійка";
            case ($last_digit >= 2 && $last_digit <= 4):
                return "копійки";
            default:
                return "копійок";
        }
    }

    function getKopiykaFormAlternative($number) {
        $last_digit = $number % 10;
        $last_two_digits = $number % 100;

        switch (true):
            case ($last_two_digits >= 11 && $last_two_digits <= 19):
                return "копійок";
            case ($last_digit == 1):
                return "копійка";
            case ($last_digit >= 2 && $last_digit <= 4):
                return "копійки";
            default:
                return "копійок";
        endswitch;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_number = intval($_POST["number"]);
        
        if ($input_number >= 1 && $input_number <= 99) {
            echo "<p>Введене число: $input_number</p>";
            echo "<p>Класична форма: $input_number " . getKopiykaForm($input_number) . "</p>";
           
        } else {
            echo "<p class='error'>Будь ласка, введіть число від 1 до 99.</p>";
        }
    }
    ?>

    <form method="post" action="">
        <label for="number">Введіть число (1-99): </label>
        <input type="number" id="number" name="number" min="1" max="99" required>
        <input type="submit" value="Отримати форму слова">
    </form>

</body>
</html>
