let cloneCounter = 1;

function cloneForm() {
    cloneCounter++;
    const originalForm = document.querySelector(".clone-this");

    const clone = originalForm.cloneNode(true);
    clone.classList.remove("clone-this");
    clone.classList.add(`clone-${cloneCounter}`);
    // Change labels and input IDs if needed
    clone.querySelectorAll("label").forEach((label) => {
        label.setAttribute("for", label.getAttribute("for") + cloneCounter);
    });
    clone.querySelectorAll("input").forEach((input) => {
        input.setAttribute("id", input.getAttribute("id") + cloneCounter);
        input.value = ""; // Clear input values in the new form
    });

    const removeButton = clone.querySelector(".remove-button");
    removeButton.addEventListener("click", function () {
        removeClone(clone);
    });

    const cloneButton = clone.querySelector(".clone-button");
    cloneButton.addEventListener("click", function () {
        cloneForm();
    });

    const cardHeader = clone.querySelector(".number-clone");
    cardHeader.textContent = cloneCounter;

    document.querySelector(".clone-in-here").appendChild(clone);
}

function removeClone(button) {
    // Menghapus elemen yang di-clone saat tombol close ditekan
    button.closest(".clone-this").remove();
}
