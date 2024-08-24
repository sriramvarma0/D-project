function loadProducts() {
    var category = document.getElementById('category').value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'Product_display.php?category=' + category, true);
    xhr.onload = function () {
        if (this.status === 200) {
            document.getElementById('product-display').innerHTML = this.responseText;
        }
    };
    xhr.send();
}
