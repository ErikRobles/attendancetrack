(function () {
    const el1 = document.querySelector("#el1");
    el1.style.display = "none";
    const el2 = document.querySelector("#el2");
    el2.style.display = "none";
    const ltc = document.querySelector("#lastTopicCovered");
    ltc.addEventListener("change", (e) => {
        const v = e.target.value;
        el1.style.display = "none";
        if (v === "el1") {
            el1.style.display = "block";
        } else if (v === "el2") {
            el2.style.display = "block";
        }
    });
})();
