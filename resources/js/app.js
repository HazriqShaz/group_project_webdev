import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const dropdownButton = document.querySelector('.drop-down');
    const dropdownMenu = document.querySelector('.drop-down-menu');

    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
    });
});

let currentImage = 1;

setInterval(() => {
  const image1 = document.getElementById("image1");
  const image2 = document.getElementById("image2");
  const image3 = document.getElementById("image3");


  if (currentImage === 1) {
    image1.classList.remove("opacity-100");
    image1.classList.add("opacity-0");
    image2.classList.remove("opacity-0");
    image2.classList.add("opacity-100");
    currentImage = 2;
  } else if (currentImage === 2) {
    image2.classList.remove("opacity-100");
    image2.classList.add("opacity-0");
    image3.classList.remove("opacity-0");
    image3.classList.add("opacity-100");
    currentImage = 3;
  } else {
    image3.classList.remove("opacity-100");
    image3.classList.add("opacity-0");
    image1.classList.remove("opacity-0");
    image1.classList.add("opacity-100");
    currentImage = 1;

  }
}, 3000);