let uploadBtn = document.querySelectorAll("[data-upload-btn]");
let uploadModal = document.querySelectorAll("[data-upload-modal]");
let uploadModalCloseBtn = document.querySelectorAll("[data-upload-modal-close-btn]");


uploadBtn.forEach(function (element, index) {
    element.addEventListener("click", function () {
        uploadModal[index].classList.add("show");
        document.documentElement.style.overflowY="hidden";
    });  
});

uploadModalCloseBtn.forEach(function (element, index) {
    element.addEventListener("click", function () {
        uploadModal[index].classList.remove("show");
        document.documentElement.style.overflowY="scroll";
    });
});