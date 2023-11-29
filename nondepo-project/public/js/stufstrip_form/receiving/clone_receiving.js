let cloneCounter = 0;

function cloneForm() {
    cloneCounter++;
    const originalForm = document.querySelector(".clone-this");
    const clone = originalForm.cloneNode(true);
    clone.classList.remove("clone-this");
    clone.classList.add(`clone-${cloneCounter}`);
    // document.getElementById('TotalCard').classList.remove('d-none');

    // Change labels and input IDs if needed
    clone.querySelectorAll(".total_value").forEach((label) => {
        label.setAttribute("for", label.getAttribute("for") + cloneCounter);
        label.textContent = "";
    });
    clone.querySelectorAll(".counter").forEach((label) => {
        label.setAttribute("for", label.getAttribute("for") + cloneCounter);
        label.textContent = "0";
    });
    clone.querySelectorAll("input, textarea").forEach((input) => {
        input.setAttribute("id", input.getAttribute("id") + cloneCounter);
        input.value = ""; // Clear input values in the new form
    });

    // Ambil elemen-elemen yang diperlukan dalam form yang di-clone
    var decrementButton = clone.querySelector(".btn-decrement");
    var incrementButton = clone.querySelector(".btn-increment");
    var counterLabel = clone.querySelector(".counter");
    var total = clone.querySelector(".total_value");
    var hiddenInput = clone.querySelector('[name="value[]"]');

    // Inisialisasi counter pada elemen clone
    var counterValue = 0;

    // Tambahkan event listener untuk tombol decrement pada elemen clone
    decrementButton.addEventListener("click", function () {
        if (counterValue > 0) {
            counterValue--;
            updateCounter();
        }
    });

    // Tambahkan event listener untuk tombol increment pada elemen clone
    incrementButton.addEventListener("click", function () {
        counterValue++;
        updateCounter();
    });

    // Fungsi untuk memperbarui nilai counter pada label pada elemen clone
    function updateCounter() {
        counterLabel.textContent = counterValue;
        total.textContent = counterValue;
        hiddenInput.value = counterValue;
    }

    document.querySelector(".clone-in-here").appendChild(clone);
}

var decrementButton = document.querySelector(".btn-decrement");
var incrementButton = document.querySelector(".btn-increment");
var counterLabel = document.querySelector(".counter");
var total = document.querySelector(".total_value");
var hiddenInput = document.querySelector('[name="value[]"]');
// Inisialisasi counter pada elemen clone
var counterValue = 0;

// Tambahkan event listener untuk tombol decrement pada elemen clone
decrementButton.addEventListener("click", function () {
    if (counterValue > 0) {
        counterValue--;
        updateCounter();
    }
});

// Tambahkan event listener untuk tombol increment pada elemen clone
incrementButton.addEventListener("click", function () {
    counterValue++;
    updateCounter();
});

// Fungsi untuk memperbarui nilai counter pada label pada elemen clone
function updateCounter() {
    counterLabel.textContent = counterValue;
    total.textContent = counterValue;
    hiddenInput.value = counterValue;
}
