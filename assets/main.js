const formatRupiah = (val) => {
  // Use Indonesian locale for accurate formatting
  const formatter = new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
    minimumFractionDigits: 0, // Set minimum digits to 0
    maximumFractionDigits: 2, // Set maximum digits to 2
  });

  // Format the value and remove leading/trailing spaces (optional)
  return formatter.format(val).trim();
};

const urlParams = new URLSearchParams(window.location.search);
const categoriesParams = urlParams.get("category");

// Function untuk get data by categories
const getDataByCategories = async (categories) => {
  if (categories == null) {
    data = fetch("services/v1/data_kue.php");
  } else {
    data = fetch("services/v1/data_kue.php?category=" + categories);
  }
  return data;
};
getDataByCategories(categoriesParams)
  .then((response) => {
    return response.json();
  })
  .then((dataKue) => {
    dataKue;
    html = "";
    dataKue.forEach((kue) => {
      html += `<div class="product-card" style="text-align: left;">
  <div class="gambar">
    <a href="./products?cake_code=${kue.cake_code}"> <img src="assets/${
        kue.image_url
      }" alt=""></a>
  </div>
  <h2>${kue.name}</h1>
    <h3>${formatRupiah(kue.price)}</h3>
    <p><span class="star-color">★</span>${kue.rating} Rating ${
        kue.best_seller == "True" ? "<b>[Best Seller]</b>" : ""
      } </p>
</div>`;
    });
    document.getElementById("products").innerHTML = html;
  });
