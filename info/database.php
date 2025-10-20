<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, есть ли необходимые данные в массиве $_POST
    if (isset($_POST['name']) && isset($_POST['apellidos']) && isset($_POST['Email']) && isset($_POST['mesaje'])) {
        // Получаем данные из массива $_POST
        $name = $_POST["name"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["Email"];
        $mensaje = $_POST["mesaje"];

        // Тут вы можете выполнить операции с данными, например, сохранить их в базе данных.
        // Пример сохранения в текстовый файл:
        $file = fopen("data.txt", "a");
        fwrite($file, "Name: $name, Apellidos: $apellidos, Email: $email, Mensaje: $mensaje\n");
        fclose($file);

        echo "Данные успешно сохранены.";
    } else {
        echo "Ошибка: Некоторые обязательные поля не были отправлены.";
    }
}
?>
