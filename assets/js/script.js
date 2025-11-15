/* ==========================
   USE CASE ROTATOR
========================== */
document.addEventListener("DOMContentLoaded", function () {

    const largeCard = document.getElementById("usecase-large-card");
    if (!largeCard) {
        console.log("❌ usecase-large-card NOT FOUND");
        return;
    }

    const useCases = [
        {
            title: "Manufacturing Plants",
            text: "Automate bag movement, filling, and palletizing for higher output.",
            image: bagbulkTheme.themeUrl + "/assets/images/usecase1.jpg"
        },
        {
            title: "Warehousing",
            text: "Improve workflow efficiency with conveyor and lift systems.",
            image: bagbulkTheme.themeUrl + "/assets/images/usecase2.jpg"
        },
        {
            title: "Agriculture & Bulk Goods",
            text: "Transport and store grain, feed, and raw materials safely.",
            image: bagbulkTheme.themeUrl + "/assets/images/usecase3.jpg"
        },
        {
            title: "Recycling Facilities",
            text: "Sort and move materials faster with rugged systems.",
            image: bagbulkTheme.themeUrl + "/assets/images/usecase4.jpg"
        }
    ];

    let i = 0;

    function rotateUseCases() {
        largeCard.style.opacity = 0;

        setTimeout(() => {
            largeCard.innerHTML = `
                <img src="${useCases[i].image}" />
                <h3>${useCases[i].title}</h3>
                <p>${useCases[i].text}</p>
            `;
            largeCard.style.opacity = 1;
        }, 300);

        i = (i + 1) % useCases.length;
    }

    rotateUseCases();
    setInterval(rotateUseCases, 4000);
});


/* ==========================
   MACHINE ROTATOR (3 at a time)
========================== */
document.addEventListener("DOMContentLoaded", function () {

    const rotator = document.getElementById("machinesRotator");
    if (!rotator) {
        console.log("❌ machinesRotator NOT FOUND");
        return;
    }

    const cards = Array.from(rotator.children);
    let index = 0;

    function showThree() {
        cards.forEach(card => card.style.display = "none");

        for (let j = 0; j < 3; j++) {
            const idx = (index + j) % cards.length;
            cards[idx].style.display = "block";
        }

        index = (index + 3) % cards.length;
    }

    showThree();
    setInterval(showThree, 3500);
});
