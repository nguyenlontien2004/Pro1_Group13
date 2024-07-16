
    document.addEventListener("DOMContentLoaded", function () {
      // Lấy phần tử số lượng và nút tăng/giảm
      var quantityInput = document.getElementById("quantityInput");

      // Bắt sự kiện khi nút tăng được click
      document.querySelector("#tang-sl").addEventListener("click", function () {
        increaseQuantity();
      });

      // Bắt sự kiện khi nút giảm được click
      document.querySelector("#giam-sl").addEventListener("click", function () {
        decreaseQuantity();
      });

      // Hàm tăng số lượng
      function increaseQuantity() {
        quantityInput.value = parseInt(quantityInput.value) + 1;
      }

      // Hàm giảm số lượng, không giảm dưới 1
      function decreaseQuantity() {
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
          quantityInput.value = currentValue - 1;
        }
      }
    });
