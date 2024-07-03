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
const categoriesParams = urlParams.get("cake_code");

// Function untuk get data by cake code
const getDataByCakeCode = async (cake_code) => {
  if (cake_code == null) {
    window.location = "../";
    alert("data kue tidak di temukan!");
  } else {
    data = fetch("../services/v1/data_kue.php?cake_code=" + cake_code);
  }
  return data;
};
getDataByCakeCode(categoriesParams)
  .then((response) => {
    return response.json();
  })
  .then((dataKue) => {
    dataKueDetail = dataKue[0];
    html = "";
    console.log(dataKueDetail);
    document.getElementById(
      "image"
    ).innerHTML = `<img id="image" src="../assets/${dataKueDetail.image_url}" alt="" />`;
    document.getElementById("title").innerHTML = dataKueDetail.name;
    document.getElementById(
      "sent-message"
    ).href = `https://wa.me/62812345678?text=Halo saya ingin memesan kue : ${dataKueDetail.name} dengan code kue : ${dataKue.cake_code}`;
    document.getElementById("description").innerHTML =
      dataKueDetail.description;
    document.getElementById("price").innerHTML = formatRupiah(
      dataKueDetail.price
    );
    document.getElementById(
      "rate_bestSeller"
    ).innerHTML = `<span class="star-color">★</span>${
      dataKueDetail.rating
    } Rating ${
      dataKueDetail.best_seller == "True" ? "<b>[Best Seller]</b>" : ""
    } `;
  });
