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

