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