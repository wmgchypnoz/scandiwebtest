const switcher = document.getElementById("productType");
const review = document.getElementById("product-review");
const productForm = document.getElementById("product_form");
var SKU = document.getElementById("sku");
const DVD = document.getElementById("DVD");
const book = document.getElementById("Book");
const furniture = document.getElementById("Furniture");
const saveBtn = document.getElementById("saveBtn");
var productName = document.getElementById("name");
var price = document.getElementById("price");
var size = document.getElementById("size");
var height = document.getElementById("height");
var width = document.getElementById("width");
var length = document.getElementById("length");
var weight = document.getElementById("weight");

//type swircher//

switcher.addEventListener("change", () => {
  if (switcher.value === `DVD`) {
    review.innerText = `Please, provide size in MB format`;
    review.style.background = "";
    DVD.style.background = "";
    book.style.background = "none";
    furniture.style.background = "none";
  }
});

switcher.addEventListener("change", () => {
  if (switcher.value === `Book`) {
    review.innerText = `Please, provide weight in KG format`;
    review.style.background = "";
    DVD.style.background = "none";
    book.style.background = "";
    furniture.style.background = "none";
  }
});

switcher.addEventListener("change", () => {
  if (switcher.value === `Furniture`) {
    review.innerText = `Please, provide dimensions in HxWxL (CM) format`;
    review.style.background = "";
    DVD.style.background = "none";
    book.style.background = "none";
    furniture.style.background = "";
  }
});

switcher.addEventListener("change", () => {
  if (switcher.value == "") {
    review.innerText = ``;
    review.style.background = "none";
    SKU.value = ``;
    DVD.style.background = "none";
    book.style.background = "none";
    furniture.style.background = "none";
  }
});

var addDollarSign = function () {
  price.value = price.value + `$`;
  return price.value;
};
