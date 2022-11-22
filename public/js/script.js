
const dismiss = document.querySelector("#dismiss");
const notification = document.querySelector(".notification");
dismiss.addEventListener("click", () => {
    notification.style.display = "none";
});
