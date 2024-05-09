import Splide from "@splidejs/splide";

const shopSlide = document.getElementById("banner__slide");

if (shopSlide) {
  const banner = new Splide(shopSlide, {
    type: "loop",
    rewind: true,
    pagination: false,
    arrows: true,
    autoplay: true,
  });
  banner.mount();
}
