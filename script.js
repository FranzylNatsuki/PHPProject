function homeTown() {
  document.addEventListener("DOMContentLoaded", function () {
      const highlights = document.querySelector(".city-highlights");

      const onScroll = () => {
          const sectionTop = highlights.getBoundingClientRect().top;
          const viewportHeight = window.innerHeight;

          if (sectionTop < viewportHeight - 100) {
              highlights.classList.add("visible");
          }
      };

      window.addEventListener("scroll", onScroll);
  });
}

function submitForm() {
  document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault();
    const contacting = document.getElementById("maincontact");
    const thankss = document.getElementById("thankyou");

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const message = document.getElementById("message").value;

    if (name && email && phone && message) {
      contacting.style.display = "none";
      thankss.style.display = "block";
    }
  });
}


function togglePassword() {
        let passwordField = document.getElementById('password');
        let eyeIcon = document.getElementById('toggle');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.innerHTML = '&#128064;';

        } else {
            passwordField.type = 'password';
            eyeIcon.innerHTML = '&#128065;';
        }
    }

function stageFunction() {
    let state = document.getElementById("javing");

    if (window.getComputedStyle(state).display === "none") {
      state.style.display = "grid";
      state.classList.add('fade'); // Add 'fade' class to #javing
      console.log("grid!");
      window.scrollTo({
      top: window.scrollY + 400,
      behavior: 'smooth'
      });
      document.querySelectorAll('#javing .javers').forEach(element => {
        element.classList.add('fade');
      });
      }
      else {
        state.style.display = "none";
        state.classList.remove('fade'); // Remove 'fade' class from #javing
        console.log("none!");
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
        document.querySelectorAll('#javing .javers').forEach(element => {
          element.classList.remove('fade');
        });
      }
    }
