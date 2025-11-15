/* ==========================================
   USE CASE ROTATOR — DOUBLE LAYER (NO JITTER)
========================================== */
document.addEventListener("DOMContentLoaded", function () {

    const cardA = document.getElementById("usecase-card-a");
    const cardB = document.getElementById("usecase-card-b");

    const useCases = [
        {
            title: "Manufacturing Plants",
            text: "Automate bag movement, filling, and palletizing for higher output.",
            image: bagbulkTheme.themeUrl + "/assets/images/usecase1.jpeg"
        },
        {
            title: "Warehousing",
            text: "Improve workflow efficiency with conveyor and lift systems.",
            image: bagbulkTheme.themeUrl + "/assets/images/usecase2.jpeg"
        },
        {
            title: "Agriculture & Bulk Goods",
            text: "Transport and store grain, feed, and raw materials safely.",
            image: bagbulkTheme.themeUrl + "/assets/images/usecase3.jpeg"
        },
        {
            title: "Recycling Facilities",
            text: "Sort and move materials faster with rugged systems.",
            image: bagbulkTheme.themeUrl + "/assets/images/usecase4.jpeg"
        }
    ];

    let i = 0;
    let showingA = true;

    function setCardContent(card, data) {
        card.innerHTML = `
            <img src="${data.image}" />
            <h3>${data.title}</h3>
            <p>${data.text}</p>
        `;
    }

    // Initial load
    setCardContent(cardA, useCases[0]);
    cardA.classList.add("active");

    function rotateUseCase() {
        const nextIndex = (i + 1) % useCases.length;

        if (showingA) {
            setCardContent(cardB, useCases[nextIndex]);
            cardB.classList.add("active");
            cardA.classList.remove("active");
        } else {
            setCardContent(cardA, useCases[nextIndex]);
            cardA.classList.add("active");
            cardB.classList.remove("active");
        }

        showingA = !showingA;
        i = nextIndex;
    }

    setInterval(rotateUseCase, 4000);
});



/* =========================================
   MACHINE SLIDER — TRUE INFINITE CAROUSEL
========================================= */
document.addEventListener("DOMContentLoaded", function () {

    const slider = document.getElementById("machinesSlider");
    if (!slider) {
        console.log("❌ machinesSlider NOT FOUND");
        return;
    }

    const cards = Array.from(slider.children);
    const total = cards.length;
    const visibleCount = 3; // number of visible cards

    let index = 0;

    // Clone the first 3 cards and append to the end (for seamless looping)
    for (let i = 0; i < visibleCount; i++) {
        const clone = cards[i].cloneNode(true);
        slider.appendChild(clone);
    }

    function slideNext() {
        index++;

        slider.style.transition = "transform 0.7s ease-in-out";
        const offset = -(index * (100 / visibleCount));
        slider.style.transform = `translateX(${offset}%)`;

        // When we reach the last fake slide, reset instantly to real start
        if (index === total) {
            setTimeout(() => {
                slider.style.transition = "none"; // jump instantly
                index = 0; // reset counter
                slider.style.transform = "translateX(0%)";
            }, 700); // match transition duration
        }
    }

    setInterval(slideNext, 3500);
});

/* =========================================
   MACHINE MODEL SELECTOR
========================================= */

const models = {
  packaging: [
    { name: "Rice Packaging Machine", range: "50 - 500 kg/hr" },
    { name: "Powder Filling Machine", range: "20 - 200 kg/hr" },
    { name: "Liquid Packaging Machine", range: "100 - 1000 kg/hr" },
    { name: "Granule Packaging Machine", range: "30 - 300 kg/hr" }
  ],
  mixing: [
    { name: "Ribbon Blender", range: "50 - 2000 L" },
    { name: "Vertical Mixer", range: "100 - 5000 L" }
  ]
};

const modelGrid = document.getElementById("modelGrid");
const summaryType = document.getElementById("summaryType");
const summaryModel = document.getElementById("summaryModel");
const selectedMachineType = document.getElementById("selectedMachineType");
const selectedModel = document.getElementById("selectedModel");

// Load default
loadModels("packaging");

document.querySelectorAll(".tab-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    document.querySelector(".tab-btn.active").classList.remove("active");
    btn.classList.add("active");

    const type = btn.dataset.type;
    summaryType.textContent = type.charAt(0).toUpperCase() + type.slice(1);
    selectedMachineType.value = type;

    loadModels(type);
  });
});

function loadModels(type) {
  modelGrid.innerHTML = "";
  models[type].forEach(m => {
    let card = document.createElement("div");
    card.className = "model-card";
    card.innerHTML = `
      <h4>${m.name}</h4>
      <p>${m.range}</p>
    `;
    card.onclick = () => {
      document.querySelectorAll(".model-card").forEach(c => c.classList.remove("active"));
      card.classList.add("active");
      summaryModel.textContent = m.name;
      selectedModel.value = m.name;
    };
    modelGrid.appendChild(card);
  });
}



