let addCategoryContainer = document.querySelector('#add-category'),
    addButton = document.querySelector("#dashboard__categories__list__button"),
    cancelButton = document.querySelector("#add-category__cancel"),
    overlay = document.querySelector(".add-category__overlay");

addButton.addEventListener("click", () => {
    addCategoryContainer.style.display = "block";
});

cancelButton.addEventListener("click", () => {
    addCategoryContainer.style.display = "none";
});
overlay.addEventListener("click", () => {
    addCategoryContainer.style.display = "none";
});
