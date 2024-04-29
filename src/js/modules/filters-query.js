const mostSales = document.getElementById("most-sales-btn");
const newest = document.getElementById("newest-btn");

if (mostSales && newest) {
  document.addEventListener("DOMContentLoaded", () => {
    mostSales.addEventListener("click", () => {
      filterProducts("most_sales");
    });
    newest.addEventListener("click", () => {
      filterProducts("newest");
    });

    function filterProducts(filterType) {
      let xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            let productsHTML = xhr.responseText;
            document.getElementById("product-list").innerHTML = productsHTML;
          } else {
            console.error("Error fetching products");
          }
        }
      };
      xhr.open(
        "GET",
        "/wp-admin/admin-ajax.php?action=filter_products&filter=" + filterType,
        true
      );
      xhr.send();
    }
  });
}
