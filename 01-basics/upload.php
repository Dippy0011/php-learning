<?php
    $name = trim($_POST['name'] ?? '');
    $escape = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $uploadMessage = '';
    $uploadedFileName = '';
    $uploadedSize = 0;
    $uploadedType = '';
    $maxFileSize = 2 * 1024 * 1024;
    $allowedTypes = [
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'image/gif' => 'gif',
        'image/webp' => 'webp',
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($name === '') {
            $uploadMessage = 'Укажите имя пользователя.';
        } elseif (!isset($_FILES['myFile'])) {
            $uploadMessage = 'Файл не был передан.';
        } else {
            $file = $_FILES['myFile'];

            if ($file['error'] !== UPLOAD_ERR_OK) {
                $uploadMessage = 'Ошибка загрузки файла (код ' . $file['error'] . ').';
            } elseif ($file['size'] > $maxFileSize) {
                $uploadMessage = 'Размер изображения не должен превышать 2 МБ.';
            } elseif ($file['size'] === 0 || !is_uploaded_file($file['tmp_name'])) {
                $uploadMessage = 'Файл не прошёл проверку загрузки.';
            } else {
                $imageInfo = @getimagesize($file['tmp_name']);
                $uploadedType = $imageInfo['mime'] ?? '';

                if ($imageInfo === false || !isset($allowedTypes[$uploadedType])) {
                    $uploadMessage = 'Выберите корректное изображение JPG, PNG, GIF или WebP.';
                } else {
                    $uploadedFileName = bin2hex(random_bytes(16)) . '.' . $allowedTypes[$uploadedType];
                    $destination = __DIR__ . '/uploads/' . $uploadedFileName;

                    if (move_uploaded_file($file['tmp_name'], $destination)) {
                        $uploadedSize = $file['size'];
                        $uploadMessage = 'Аватар успешно загружен.';
                    } else {
                        $uploadedFileName = '';
                        $uploadMessage = 'Не удалось сохранить файл в папку uploads.';
                    }
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="ru"> 
    <head>
        <title>Профиль</title>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" />
    </head>
    <body>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <?php if ($name !== ''): ?>
                <h1>Профиль пользователя: <?= $escape($name) ?></h1>
            <?php endif; ?>
            <p><?= $escape($uploadMessage) ?></p>
            <?php if ($uploadedFileName !== ''): ?>
                <p>Имя файла: <?= $escape($uploadedFileName) ?></p>
                <p>Размер: <?= number_format($uploadedSize / 1024, 2, ',', ' ') ?> КБ</p>
                <p>Тип: <?= $escape($uploadedType) ?></p>
                <img src="uploads/<?= $escape($uploadedFileName) ?>" alt="Аватар пользователя" style="max-width: 400px; height: auto;" />
            <?php endif; ?>
        <?php endif; ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">

            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" value="<?= $escape($name) ?>" required pattern="[A-Za-zА-Яа-яЁё ]+" title="Используйте только буквы и пробелы" />
            
            <input type="file" name="myFile" accept="image/*" required />

            <input type="submit" value="Отправить" name="doUpload"/>
        </form>
    </body>
</html>