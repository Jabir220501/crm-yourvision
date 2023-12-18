function showNotification(message, variant) {
  Toastify({
    text: message,
    backgroundColor: variant === "success" ? "#28a745" : "#dc3545",
    className: "px-4 py-2 rounded-md shadow-lg",
    position: "right",
    gravity: "bottom",
    duration: 3000,
  }).showToast();
}
const form = document.querySelector(".card");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const formData = new FormData(form);
  fetch("./handlers/auth/loginUser.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      if (data.success) {
        showNotification(`Success! ${data.success}.`, "success");
        setTimeout(() => {
          document.location.href = "./";
        }, 1000);
      } else {
        showNotification(`Error! ${data.error}.`, "error");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});
