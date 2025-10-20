const image = document.querySelector(".corp_img_colums");
const checkboxId = image.getAttribute("data-checkbox");
const checkbox = document.getElementById(checkboxId);

image.addEventListener("click", function() {
  checkbox.checked = !checkbox.checked;
});
