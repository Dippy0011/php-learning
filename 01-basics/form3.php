<!DOCTYPE html>
<html lang="ru"> 
    <head>
        <title>форма заказа</title>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="form.css" />
    </head>
    <body>
        <!-- Поля с name станут ключами в $_POST; action указывает файл-обработчик. -->
        <form action="form2.php" method="post">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required />
            
            <label for="product">Выберите товар</label>
            <select name="product" id="product">
                <option value="headphones">Наушники — 5000 ₽</option>
                <option value="keyboard">Клавиатура — 3000 ₽</option>
                <option value="monitor">Монитор — 25000 ₽</option>
            </select>
    
            <label for="quantity">Количество:</label>
            <input type="text" id="quantity" name="quantity" required inputmode="numeric" pattern="[0-9]+" title="Используйте только цифры" />

            <label for="deliveryMethod">Способ доставки:</label>
            <select name="deliveryMethod" id="deliveryMethod">
                <option value="selfPickup">Самовывоз — 0 ₽</option>
                <option value="courier">Курьер — 500 ₽</option>
                <option value="express">Экспресс — 1000 ₽</option>
            </select>

            <label for="additionalServices">Дополнительные услуги</label>
            <!-- Квадратные скобки отправляют выбранные услуги в виде массива. -->
            <select name="additionalServices[]" multiple size="2" id="additionalServices">
                <option value="giftPackaging">Подарочная упаковка — 300 ₽</option>
                <option value="extendedWarranty">Расширенная гарантия — 1000 ₽</option>
            </select>

            <!-- Скрытое поле тоже попадёт в $_POST, хотя его не видно на странице. -->
            <input type="hidden" name="source" value="form3" />
            <input type="submit" value="Оформить заказ" />
        </form>
    </body>
</html>