import Splide from "@splidejs/splide";

const mainSlide = document.getElementById("main-slider");
const thumbSlide = document.getElementById("thumbnail-slider");

console.log(mainSlide);
console.log(thumbSlide);

if (mainSlide && thumbSlide) {
  document.addEventListener("DOMContentLoaded", () => {
    const main = new Splide(mainSlide, {
      type: "fade",
      rewind: true,
      pagination: false,
      arrows: false,
    });

    const thumbnails = new Splide(thumbSlide, {
      fixedHeight: 60,
      fixedWidth: 60,
      gap: "12px",
      rewind: true,
      pagination: false,
      isNavigation: true,
    });

    main.sync(thumbnails);
    main.mount();
    thumbnails.mount();
  });
}
