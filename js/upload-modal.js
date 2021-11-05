const uploadBtn = document.getElementById("uploadBtn");
const uploadModal = document.getElementById("uploadModal");
const uploadModalCloseBtn = document.getElementById("uploadModalCloseBtn");

uploadBtn.addEventListener("click", function () {
    uploadModal.classList.add("show");
    document.documentElement.style.overflowY="hidden";
});

uploadModalCloseBtn.addEventListener("click", function () {
    uploadModal.classList.remove("show");
    document.documentElement.style.overflowY="scroll";
})

