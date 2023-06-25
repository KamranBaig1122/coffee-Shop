function myMenu() {
    window.location.href = "menu.php";
}

function incrementQuantity(index) {
    var quantityElement = document.getElementsByClassName("tab")[index];
    var totalElement = document.getElementsByClassName("total")[index];

    var quantity = parseInt(quantityElement.textContent);
    quantity++;
    quantityElement.textContent = quantity;

    var price = parseInt(quantityElement.parentNode.previousElementSibling.textContent);
    var total = quantity * price;
    totalElement.textContent = total;

    updateGrandTotal();
}

function decrementQuantity(index) {
    var quantityElement = document.getElementsByClassName("tab")[index];
    var totalElement = document.getElementsByClassName("total")[index];

    var quantity = parseInt(quantityElement.textContent);
    if (quantity > 0) {
        quantity--;
        quantityElement.textContent = quantity;

        var price = parseInt(quantityElement.parentNode.previousElementSibling.textContent);
        var total = quantity * price;
        totalElement.textContent = total;

        updateGrandTotal();
    }
}

function updateGrandTotal() {
    var grandTotalElement = document.getElementById("grandTotal");
    var totals = document.getElementsByClassName("total");
    var grandTotal = 0;

    for (var i = 0; i < totals.length; i++) {
        grandTotal += parseInt(totals[i].textContent);
    }

    grandTotalElement.textContent = grandTotal;
}

function prepareOrder() {
    const form = document.getElementById("order-form");
    const tableNumber = form.elements["tableNumber"].value;
    const quantities = document.getElementsByClassName("tab");
    const prices = document.querySelectorAll("tbody td:nth-child(2)");
    const totals = document.getElementsByClassName("total");

    let orderData = {};

    for (let i = 0; i < quantities.length; i++) {
        const quantity = parseInt(quantities[i].textContent);
        if (quantity > 0) {
            const teaName = quantities[i].parentNode.parentNode.children[0].textContent;
            const price = parseInt(prices[i].textContent);
            const total = quantity * price;
            orderData[teaName] = {
                quantity: quantity,
                price: price,
                total: total,
            };
        }
    }

    // Set order data as a JSON string in a hidden input field
    const orderDataInput = document.createElement("input");
    orderDataInput.type = "hidden";
    orderDataInput.name = "orderData";
    orderDataInput.value = JSON.stringify(orderData);
    form.appendChild(orderDataInput);
}

// document.getElementById("order-button").addEventListener("click", function (event) {
//     event.preventDefault();

//     var tableNumber = document.getElementById("table-number").value;
//     var teaNames = document.getElementsByName("teaNames[]");
//     var teaQuantities = document.getElementsByName("teaQuantities[]");
//     var teaPrices = document.getElementsByName("teaPrices[]");
//     var total = document.getElementById("grandTotal").textContent;

//     var teaNamesArray = [];
//     var teaQuantitiesArray = [];
//     var teaPricesArray = [];

//     for (var i = 0; i < teaNames.length; i++) {
//         teaNamesArray.push(teaNames[i].value);
//         teaQuantitiesArray.push(teaQuantities[i].parentNode.querySelector(".tab").textContent);
//         teaPricesArray.push(teaPrices[i].value);
//     }

//     var formData = new FormData();
//     formData.append("tableNumber", tableNumber);
//     formData.append("teaNames", JSON.stringify(teaNamesArray));
//     formData.append("teaQuantities", JSON.stringify(teaQuantitiesArray));
//     formData.append("teaPrices", JSON.stringify(teaPricesArray));
//     formData.append("total", total);

//     fetch("t.php", {
//         method: "POST",
//         body: formData
//     })
//     .then(function (response) {
//         Handle the response from the server
//         console.log("Order placed successfully!");
//     })
//     .catch(function (error) {
//         Handle any errors that occurred during the request
//         console.error("Error placing the order:", error);
//     });
// });