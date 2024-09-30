const header = document.querySelector("#header_component nav");
const toggleClass = "is__sticky";
const head = document.querySelector("#header_component");
const nav = document.querySelector("#header_component nav .navbar");
window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 300) {
        header.classList.add(toggleClass);
        nav.classList.add("container");
        nav.classList.add("mx-auto");
        header.classList.remove("rounded-full");
        head.classList.remove("py-5");
    } else {
        header.classList.remove(toggleClass);
        head.classList.add("py-5");
        header.classList.add("rounded-full");
        nav.classList.remove("container");
        nav.classList.remove("mx-auto");

    }
});






console.log(header);