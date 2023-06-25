<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet" />
    <title>Coffee Shop</title>
</head>
<body>
    <div class="container">
        <div class="banner">
            <img class="img1" src="image/coffee1.jpg" alt="banner Image" height="662px" width="100%" />
        </div>
        <div class="front">
            <h1 class="main_word">User Screen</h1>
            <h1 style="margin-bottom: 0px;">TEA</h1>
            <label for="table-number">Table Number:</label>
            <select id="table-number">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <table>
                <thead>
                    <th>Cold Coffee</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Frappuccino Blends</td>
                        <td>700</td>
                        <td>
                            <button class="plus" onclick="incrementQuantity(0)">+</button>
                            <h2 class="tab" style="display: inline;">0</h2>
                            <button class="minus" onclick="decrementQuantity(0)">-</button>
                        </td>
                        <td class="total">0</td>
                    </tr>
                    <tr>
                        <td>Iced Coffee</td>
                        <td>400</td>
                        <td>
                            <button class="plus" onclick="incrementQuantity(1)">+</button>
                            <h2 class="tab" style="display: inline;">0</h2>
                            <button class="minus" onclick="decrementQuantity(1)">-</button>
                        </td>
                        <td class="total">0</td>
                    </tr>
                    <tr>
                        <td>Cold brew</td>
                        <td>500</td>
                        <td>
                            <button class="plus" onclick="incrementQuantity(2)">+</button>
                            <h2 class="tab" style="display: inline;">0</h2>
                            <button class="minus" onclick="decrementQuantity(2)">-</button>
                        </td>
                        <td class="total">0</td>
                    </tr>
                    <tr>
                        <td>Iced Shaken Espresso</td>
                        <td>1200</td>
                        <td>
                            <button class="plus" onclick="incrementQuantity(3)">+</button>
                            <h2 class="tab" style="display: inline;">0</h2>
                            <button class="minus" onclick="decrementQuantity(3)">-</button>
                        </td>
                        <td class="total">0</td>
                    </tr>
                    <tr>
                        <td>Iced Latte</td>
                        <td>800</td>
                        <td>
                            <button class="plus" onclick="incrementQuantity(4)">+</button>
                            <h2 class="tab" style="display: inline;">0</h2>
                            <button class="minus" onclick="decrementQuantity(4)">-</button>
                        </td>
                        <td class="total">0</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td id="grandTotal">0</td>
                    </tr>
                </tbody>
            </table>
            <button class="order">ORDER NOW</button>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>
