
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
