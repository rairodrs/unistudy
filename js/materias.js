    document.querySelectorAll(".container").forEach(container => {
        const selectBtn = container.querySelector(".select-btn");
        const items = container.querySelectorAll(".item");
        const btnText = container.querySelector(".btn-text");
        const subject = container.dataset.subject; // Obtém a matéria do data attribute

        selectBtn.addEventListener("click", () => {
            selectBtn.classList.toggle("open");
        });

        items.forEach(item => {
            item.addEventListener("click", () => {
                item.classList.toggle("checked");

                let checked = container.querySelectorAll(".checked");

                if (checked && checked.length > 0) {
                    btnText.innerText = `${subject} - ${checked.length}`;
                } else {
                    btnText.innerText = subject;
                }
            });
        });
    });
