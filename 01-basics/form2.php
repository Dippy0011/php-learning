<?php
// Открываем сессию, чтобы сохранить заказ между POST-запросом и перенаправлением.
session_start();

// Экранируем текст перед вставкой в HTML, чтобы пользовательский ввод не стал разметкой.
function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Форматируем цену, например 10800 в строку "10 800 ₽".
function formatRubles(int $amount): string
{
    return number_format($amount, 0, ',', ' ') . ' ₽';
}

// Допустимые товары и цены задаются на сервере, а не берутся из формы.
$products = [
    'headphones' => ['name' => 'Наушники', 'price' => 5000],
    'keyboard' => ['name' => 'Клавиатура', 'price' => 3000],
    'monitor' => ['name' => 'Монитор', 'price' => 25000],
];

// Серверный список разрешённых способов доставки.
$deliveryMethods = [
    'selfPickup' => ['name' => 'Самовывоз', 'price' => 0],
    'courier' => ['name' => 'Курьер', 'price' => 500],
    'express' => ['name' => 'Экспресс', 'price' => 1000],
];

// Серверный список разрешённых дополнительных услуг.
$additionalServices = [
    'giftPackaging' => ['name' => 'Подарочная упаковка', 'price' => 300],
    'extendedWarranty' => ['name' => 'Расширенная гарантия', 'price' => 1000],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Читаем отправленные формой значения. Для имени проверяем, что пришёл текст.
    $nameInput = $_POST['name'] ?? '';
    $name = is_string($nameInput) ? trim($nameInput) : '';
    $productId = $_POST['product'] ?? '';
    $deliveryId = $_POST['deliveryMethod'] ?? '';
    $quantity = filter_var($_POST['quantity'] ?? '', FILTER_VALIDATE_INT);
    $serviceIds = $_POST['additionalServices'] ?? [];
    $sourceInput = $_POST['source'] ?? '';

    // Не принимаем пустое имя, неверные поля или количество меньше одного.
    if ($name === '' || !is_string($productId) || !is_string($deliveryId) || $quantity === false || $quantity < 1) {
        exit('Проверьте имя, товар, доставку и количество.');
    }

    // Сверяем полученные идентификаторы с серверными списками.
    if (!isset($products[$productId]) || !isset($deliveryMethods[$deliveryId])) {
        exit('Неизвестный товар или способ доставки.');
    }

    if (!is_array($serviceIds)) {
        exit('Некорректный список дополнительных услуг.');
    }

    $product = $products[$productId];
    $delivery = $deliveryMethods[$deliveryId];
    $selectedServices = [];
    $servicesCost = 0;

    // Проверяем каждую услугу и накапливаем её стоимость.
    foreach ($serviceIds as $serviceId) {
        if (!is_string($serviceId) || !isset($additionalServices[$serviceId])) {
            exit('Неизвестная дополнительная услуга.');
        }

        $selectedServices[] = $additionalServices[$serviceId];
        $servicesCost += $additionalServices[$serviceId]['price'];
    }

    // Считаем стоимость товаров, а затем общую стоимость заказа.
    $goodsCost = $product['price'] * $quantity;
    $total = $goodsCost + $delivery['price'] + $servicesCost;

    // POST исчезнет после redirect, поэтому временно сохраняем итог заказа в сессии.
    $_SESSION['order'] = [
        'name' => $name,
        'product' => $product['name'],
        'quantity' => $quantity,
        'goodsCost' => $goodsCost,
        'delivery' => $delivery['name'],
        'deliveryCost' => $delivery['price'],
        'services' => $selectedServices,
        'servicesCost' => $servicesCost,
        'total' => $total,
        'source' => is_string($sourceInput) ? $sourceInput : '',
    ];

    // Браузер перейдёт на form2.php новым GET-запросом; urlencode безопасно кодирует имя в URL.
    header('Location: form2.php?name=' . urlencode($name));
    exit;
}

// После redirect ожидаем GET: на этом запросе показываем сохранённый в сессии заказ.
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    exit('Используйте GET или POST.');
}

$order = $_SESSION['order'] ?? null;

if ($order === null) {
    exit('Сначала оформите заказ на странице form3.php.');
}

// array_map применяет callback к каждой услуге и готовит безопасный HTML-элемент списка.
$serviceLines = array_map(
    static fn(array $service): string => '<li>' . escapeHtml($service['name']) . ' — ' . formatRubles($service['price']) . '</li>',
    $order['services']
);
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Ваш заказ</title>
        <link rel="stylesheet" href="form.css" />
    </head>
    <body>
        <h1>Заказ <?= escapeHtml($order['name']) ?></h1>
        <p>Товар: <?= escapeHtml($order['product']) ?></p>
        <p>Количество: <?= $order['quantity'] ?></p>
        <p>Стоимость товаров: <?= formatRubles($order['goodsCost']) ?></p>
        <p>Доставка: <?= escapeHtml($order['delivery']) ?></p>
        <p>Стоимость доставки: <?= formatRubles($order['deliveryCost']) ?></p>
        <p>Дополнительные услуги:</p>
        <?php if ($serviceLines !== []): ?>
            <ul><?= implode('', $serviceLines) ?></ul>
        <?php else: ?>
            <p>Нет</p>
        <?php endif; ?>
        <p>Стоимость дополнительных услуг: <?= formatRubles($order['servicesCost']) ?></p>
        <p><strong>Итого: <?= formatRubles($order['total']) ?></strong></p>
        <p>Источник заказа: <?= escapeHtml($order['source']) ?></p>
        <p><a href="form3.php">Оформить ещё один заказ</a></p>
    </body>
</html>