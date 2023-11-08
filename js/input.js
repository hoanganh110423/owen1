const form = document.querySelector("form");
const inputs = document.querySelectorAll("input");

form.addEventListener("submit", function(event) {
    for (const input of inputs) {
        if (input.value === "") {
            event.preventDefault();
            input.disabled = true;

            // Hiển thị thông báo lỗi
            const errorMessage = document.createElement("div");
            errorMessage.classList.add("error-message");
            errorMessage.textContent = "Vui lòng điền đầy đủ thông tin";
            input.parentNode.appendChild(errorMessage);

            return;
        }
    }

    // Tất cả các trường input đều đã được điền
    input.disabled = false;
});