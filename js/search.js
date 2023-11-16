var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").classList.remove("hidden");
  } else {
    document.getElementById("header").classList.add("hidden");
  }
  prevScrollpos = currentScrollPos;
}

function showProduct() {
  var product = document.getElementById("product");
  var hidden = document.getElementById("hidden-clothes");
  var hidden2 = document.getElementById("hidden-account");
  if (product.style.display === "none") {
    product.style.display = "block";
    hidden.style.right = "500px";
    hidden2.style.right = "290px";
  } else {
    product.style.display = "none";
    hidden.style.right = "300px";
    hidden2.style.right = "90px";
  }
}
function hiddenItems() {
  var hiddenitems = document.getElementById("hidden-items");
  if (hiddenitems.style.display === "none") {
    hiddenitems.style.display = "flex";
  } else {
    hiddenitems.style.display = "none";
  }
}

// Hàm để thực hiện khi nút "Xem thêm" được bấm
let isExpanded = false;

function toggleView() {
    const viewMoreButton = document.querySelector(".viewmore");

    // Kiểm tra trạng thái hiện tại
    if (isExpanded) {
        // Nếu đang ở trạng thái "Xem thêm", chuyển sang trạng thái "Thu gọn"
        viewMoreButton.textContent = "Thu gọn"; // Thay đổi nội dung của nút
    } else {
        // Nếu đang ở trạng thái "Thu gọn", chuyển sang trạng thái "Xem thêm"
        viewMoreButton.textContent = "Xem thêm"; // Thay đổi nội dung của nút
    }

    // Thay đổi trạng thái
    isExpanded = !isExpanded;
}

// Gán sự kiện khi nút "Xem thêm" được bấm
const viewMoreButton = document.querySelector(".viewmore");
viewMoreButton.addEventListener("click", toggleView);

window.addEventListener("scroll", function() {
  var scrollToTopButton = document.getElementById("scrollToTopButton");
  
  // Hiển thị nút khi cuộn xuống một phần tử cụ thể
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollToTopButton.style.display = "block";
  } else {
      scrollToTopButton.style.display = "none";
  }
});

// Xử lý sự kiện khi nhấn nút quay lại đầu trang
document.getElementById("scrollToTopButton").addEventListener("click", function() {
  document.body.scrollTop = 0; // Safari
  document.documentElement.scrollTop = 0; // Chrome, Firefox, IE, Opera
});
