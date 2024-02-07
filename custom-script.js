document.addEventListener("DOMContentLoaded", function() {
  const prev = document.querySelector("#prev");
  const next = document.querySelector("#next");
  const carouselVp = document.querySelector("#carousel-vp");
  const cCarouselInner = document.querySelector("#cCarousel-inner");
  const carouselItems = document.querySelectorAll(".cCarousel-item");
  let leftValue = 0;
  
  // Calculate total movement size including item width and gap
  const totalMovementSize = carouselItems[0].offsetWidth + parseFloat(window.getComputedStyle(cCarouselInner).gap);
  
  // Event listener for previous button
  prev.addEventListener("click", function() {
      if (leftValue < 0) {
          leftValue += totalMovementSize;
          cCarouselInner.style.transform = `translateX(${leftValue}px)`;
      }
  });
  
  // Event listener for next button
  next.addEventListener("click", function() {
      const carouselVpWidth = carouselVp.offsetWidth;
      const carouselInnerWidth = cCarouselInner.offsetWidth;
      if (carouselInnerWidth - Math.abs(leftValue) > carouselVpWidth) {
          leftValue -= totalMovementSize;
          cCarouselInner.style.transform = `translateX(${leftValue}px)`;
      }
  });

  // Update leftValue on window resize
  window.addEventListener("resize", function() {
      const carouselVpWidth = carouselVp.offsetWidth;
      const carouselInnerWidth = cCarouselInner.offsetWidth;
      if (carouselInnerWidth < carouselVpWidth) {
          leftValue = 0;
          cCarouselInner.style.transform = `translateX(${leftValue}px)`;
      }
  });
});
