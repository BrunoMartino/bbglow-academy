import MenuMobile from "./modules/menu-mobile.js";
import AnimaScroll from "./modules/animaScroll.js";

const menuMobile = new MenuMobile(".menu_mobile-btn", ".header_nav");

const animaScroll = new AnimaScroll('[data-anima="scroll"]');

menuMobile.init();
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
