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
            <h1 class="main_word">Chef Screen</h1>
            <form id="order-form">
                <label for="table-number">Table Number:</label>
                <select name="tableNumber" id="table-number">
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
                <table id="order-table">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table rows will be dynamically added here -->
                    </tbody>
                </table>
                <p id="no-data-message" style="display: none; color: red;">No data available for the selected table.</p>
                <input type="hidden" id="orderDataInput" name="orderData" />
                <button type="button" class="order">COMPLETE</button>
            </form>
        </div>
    </div>
    <script src="main.js"></script>
    <script>
        function fetchOrderData() {
            const tableNumberSelect = document.getElementById("table-number");
            const selectedTableNumber = tableNumberSelect.value;
            const url = `a.php?tableNumber=${selectedTableNumber}`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    updateTableRows(data);
                })
                .catch(error => {
                    console.log("Error fetching order data:", error);
                });
        }

        function updateTableRows(orderData) {
            const tableBody = document.querySelector("#order-table tbody");
            const noDataMessage = document.getElementById("no-data-message");
            tableBody.innerHTML = "";

            if (orderData.length > 0) {
                noDataMessage.style.display = "none";

                orderData.forEach(item => {
                    const { name, quantity } = item;

                    const row = document.createElement("tr");
                    const nameCell = document.createElement("td");
                    const quantityCell = document.createElement("td");

                    nameCell.textContent = name;
                    quantityCell.textContent = quantity;

                    row.appendChild(nameCell);
                    row.appendChild(quantityCell);

                    tableBody.appendChild(row);
                });
            } else {
                noDataMessage.style.display = "block";
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            const tableNumberSelect = document.getElementById("table-number");
            tableNumberSelect.addEventListener("change", fetchOrderData);

            fetchOrderData();
        });
    </script>
</body>

</html>
