const themeToggle = document.getElementById("themeToggle");
const body = document.body;
const lightIcon = document.getElementById("lightIcon");
const darkIcon = document.getElementById("darkIcon");

themeToggle.addEventListener("change", () => {
    if (themeToggle.checked) {
        // Enable Dark Mode
        body.classList.add("bg-dark", "text-light");
        lightIcon.classList.add("d-none");
        darkIcon.classList.remove("d-none");
    } else {
        // Enable Light Mode
        body.classList.remove("bg-dark", "text-light");
        darkIcon.classList.add("d-none");
        lightIcon.classList.remove("d-none");
    }
});
