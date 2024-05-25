document.addEventListener("DOMContentLoaded", function() {
    const openButtons = document.querySelectorAll(".open-dialog");
    const closeButtons = document.querySelectorAll(".close-dialog");

    openButtons.forEach((button, index) => {
        button.onclick = function() {
            const modal = document.querySelectorAll("dialog")[index];
            modal.show();
        };
    });

    closeButtons.forEach((button, index) => {
        button.onclick = function() {
            const modal = document.querySelectorAll("dialog")[index];
            modal.close();
        };
    });
});