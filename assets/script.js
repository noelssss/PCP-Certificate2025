// Certificate click → Show modal with email form
document.addEventListener("DOMContentLoaded", () => {
  const images = document.querySelectorAll(".card img");
  const modal = document.getElementById("claim-modal");
  const closeModalBtn = document.getElementById("close-modal");
  const claimForm = document.getElementById("claim-form");

  // Open modal when certificate is clicked
  images.forEach(image => {
    image.addEventListener("click", () => {
      modal.classList.add("active");
      modal.setAttribute("data-cert", image.src); // keep track of which cert
    });
  });

  // Close modal when clicking cancel button
  closeModalBtn.addEventListener("click", () => {
    modal.classList.remove("active");
  });

  // Close modal if user clicks outside modal-content
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.remove("active");
    }
  });

  // Handle form submission
  claimForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = document.getElementById("email").value;
    const certFile = modal.getAttribute("data-cert");

    // Example: show confirmation alert
    alert(`Certificate: ${certFile}\nEmail: ${email}\n\n✅ Confirmation sent!`);

    modal.classList.remove("active");
    claimForm.reset();
  });
});
