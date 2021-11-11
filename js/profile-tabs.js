const tab = document.querySelectorAll(".profile-tabs input")
const post = document.querySelector(".profile-tabs #post")
const saved = document.querySelector(".profile-tabs #saved")

tab.forEach(function (tabItem) {
    tabItem.addEventListener("click",function(event){
        if (event.target.checked) {
            window.location.replace("?tab="+ event.target.dataset.tab + "&id=" + event.target.dataset.profileId);
        }
    })
})

let params = (new URL(document.location)).searchParams;
let queryString = params.get("tab");

switch (queryString) {
    case null:
        post.checked=true
        break;

    case "post":
        post.checked=true
        break;

    case "saved":
        saved.checked=true
        break;
}
