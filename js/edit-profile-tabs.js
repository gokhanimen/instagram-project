const tab = document.querySelectorAll(".side-menu-list input")
const editProfile = document.querySelector(".side-menu-list #edit-profile")
const changePassword = document.querySelector(".side-menu-list #change-password")
const editProfileContent = document.querySelector(".side-menu-content .edit-profile")
const changePasswordContent = document.querySelector(".side-menu-content .change-password")

tab.forEach(function (tabItem) {
    tabItem.addEventListener("click",function(event){
        if (event.target.checked) {
            window.location.replace("?edit-tab="+ event.target.dataset.editTab);
        }
    })
})

let params = (new URL(document.location)).searchParams;
let queryString = params.get("edit-tab");

switch (queryString) {
    case null:
        editProfile.checked=true
        editProfileContent.style.display="block"
        changePasswordContent.style.display="none"
        break;

    case "edit-profile":
        editProfile.checked=true
        editProfileContent.style.display="block"
        changePasswordContent.style.display="none"
        break;

    case "change-password":
        changePassword.checked=true
        editProfileContent.style.display="none"
        changePasswordContent.style.display="block"
        break;
}