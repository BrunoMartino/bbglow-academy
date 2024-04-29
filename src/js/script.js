import MenuMobile from "./modules/menu-mobile.js";
import AnimaScroll from "./modules/animaScroll.js";
import "./modules/singleProductCaroussel.js";
import "./modules/filters-query.js";

const menuMobile = new MenuMobile(".menu_mobile-btn", ".header_nav");
const filterMobile = new MenuMobile(".filter_btn", ".filter_list");
const catMobile = new MenuMobile(".categories_btn", ".categories_nav");

const animaScroll = new AnimaScroll('[data-anima="scroll"]');

menuMobile.init();
filterMobile.init();
catMobile.init();
animaScroll.init();

window.addEventListener("scroll", () => {
  const navbar = document.querySelector("header");
  if (window.scrollY > 500) {
    navbar.style.position = "fixed";
    navbar.style.top = "0";
    navbar.style.zIndex = 9998;
  } else {
    navbar.style.top = 0;
    navbar.style.position = "relative";
  }
});

const cartBtn = document.getElementById("cart_link");
const cartModal = document.querySelector(".xoo-wsc-modal");

cartBtn.addEventListener("click", (event) => {
  event.preventDefault();
  cartModal.classList.toggle("xoo-wsc-cart-active");
});
