const useCases = [
  {
    title: "Manufacturing Plants",
    text: "Automate bag movement, filling, and palletizing for higher output.",
    image: "/wp-content/themes/your-theme/assets/images/usecase1.jpg"
  },
  {
    title: "Warehousing",
    text: "Improve workflow efficiency with custom conveyor and lift systems.",
    image: "/wp-content/themes/your-theme/assets/images/usecase2.jpg"
  },
  {
    title: "Agriculture & Bulk Goods",
    text: "Transport and store grain, feed, fertiliser, and raw materials safely.",
    image: "/wp-content/themes/your-theme/assets/images/usecase3.jpg"
  },
  {
    title: "Recycling Facilities",
    text: "Sort and move materials faster with rugged conveyor systems.",
    image: "/wp-content/themes/your-theme/assets/images/usecase4.jpg"
  }
];

let index = 0;
const card = document.getElementById("usecase-card");

function updateUseCase() {
  if (!card) return;

  card.style.opacity = 0;

  setTimeout(() => {
    card.innerHTML = `
      <img src="${useCases[index].image}" alt="${useCases[index].title}">
      <h3>${useCases[index].title}</h3>
      <p>${useCases[index].text}</p>
    `;
    card.style.opacity = 1;
  }, 300);

  index = (index + 1) % useCases.length;
}

document.addEventListener("DOMContentLoaded", () => {
  updateUseCase();
  setInterval(updateUseCase, 4000);
});
