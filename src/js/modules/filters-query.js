document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("most-sales-btn").addEventListener("click", () => {
    filterProducts("most_sales");
  });
  document.getElementById("newest-btn").addEventListener("click", () => {
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
