document.getElementById("contactForm").addEventListener("submit", function (event) {
  event.preventDefault(); 


  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const message = document.getElementById("message").value;

  if (name && email && phone && message) {
    alert(`Thank you, ${name}! Your message has been submitted.`);
    this.reset(); // 
  } else {
    alert("Please fill out all fields.");
  }
});

  