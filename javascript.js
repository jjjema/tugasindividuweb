
document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggleTheme");
    const body = document.body;

    let isDark = false;

    toggleButton.addEventListener("click", function () {
        if (!isDark) {
            body.style.backgroundColor = "#222";
            body.style.color = "white";
            toggleButton.textContent = "Ganti ke Tema Terang";
        } else {
            body.style.backgroundColor = "white";
            body.style.color = "black";
            toggleButton.textContent = "Ganti ke Tema Gelap";
        }
        isDark = !isDark;
    });
});
