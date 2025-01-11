document.addEventListener("DOMContentLoaded", () => {
    const tooltip = document.createElement("div");
    tooltip.classList.add("tooltip");
    document.body.appendChild(tooltip);

    const areas = document.querySelectorAll("map area");

    areas.forEach((area) => {
        area.addEventListener("mouseover", (event) => {
            tooltip.style.display = "block";
            tooltip.textContent = area.getAttribute("alt");
            area.classList.add("hovered");
        });

        area.addEventListener("mousemove", (event) => {
            tooltip.style.left = event.pageX + 10 + "px";
            tooltip.style.top = event.pageY + 10 + "px";
        });

        area.addEventListener("mouseout", () => {
            tooltip.style.display = "none";

            area.classList.remove("hovered");
        });

        area.addEventListener("click", () => {
            const href = area.getAttribute("href");
            if (href) {
                window.location.href = href;
            }
        });
    });
});
