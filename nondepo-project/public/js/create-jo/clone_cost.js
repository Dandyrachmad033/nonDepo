function cloneElement_cost() {
    cloneid++;
    // Menduplikasi elemen yang ingin di-clone
    var originalElement = document.querySelector(".clone-this-cost");
    var clonedElement = originalElement.cloneNode(true);

    clonedElement.querySelectorAll("input").forEach((input) => {
        var originalId = input.getAttribute("id");
        input.setAttribute("id", originalId + cloneid);
        input.value = ""; // Clear input values in the new form
    });
    // Membersihkan nilai input pada elemen yang di-clone

    var clonedbutton = clonedElement.querySelector("button");
    var originalSelectId_cost = clonedElement
        .querySelector(".currencyType_cost")
        .getAttribute("id");
    clonedElement
        .querySelector(".currencyType_cost")
        .setAttribute("id", originalSelectId_cost + cloneid);

    clonedbutton.style.display = "block";

    function updateTotal_cost() {
        // Mendapatkan nilai quantity dan rate
        var quantity_cost =
            parseFloat(
                document.getElementById("quantity_cost" + cloneid).value,
            ) || 0;
        var rate_cost =
            parseFloat(document.getElementById("rate_cost" + cloneid).value) ||
            0;

        // Menghitung total
        var total_cost = quantity_cost * rate_cost;

        // Menampilkan hasilnya di elemen dengan id 'total' dengan format mata uang yang dipilih
        var currencyType_cost = document.getElementById(
            "currencyType_cost" + cloneid,
        ).value;
        var currencyFormat_cost =
            currencyType_cost === "IDR" ? "id-ID" : "en-US";
        document.getElementById("total_cost" + cloneid).value =
            new Intl.NumberFormat(currencyFormat_cost, {
                style: "currency",
                currency: currencyType_cost,
            }).format(total_cost);

        // Memanggil fungsi untuk menghitung dan menampilkan pajak
        updateTax_cost(total_cost, currencyType_cost);
    }

    function updateTax_cost(total_cost, currencyType_cost) {
        // Menghitung pajak (11% dari total)
        var tax_cost = total_cost * 0.11;

        // Menampilkan hasilnya di elemen dengan id 'tax' dengan format mata uang yang dipilih
        var currencyFormat_cost =
            currencyType_cost === "IDR" ? "id-ID" : "en-US";
        document.getElementById("tax_cost" + cloneid).value =
            new Intl.NumberFormat(currencyFormat_cost, {
                style: "currency",
                currency: currencyType_cost,
            }).format(tax_cost);
    }
    // Memanggil fungsi updateTotal setiap kali nilai quantity atau rate berubah
    // Menambahkan elemen yang di-clone ke dalam container
    document.querySelector(".clone-cost").appendChild(clonedElement);
    document
        .getElementById("quantity_cost" + cloneid)
        .addEventListener("input", updateTotal_cost);
    document
        .getElementById("rate_cost" + cloneid)
        .addEventListener("input", updateTotal_cost);
}

function removeElement_cost(button) {
    // Mendapatkan elemen card yang berisi button "Delete"
    var cardElement = button.closest(".clone-this-cost");

    // Menghapus elemen card dari dokumen
    cardElement.remove();
}

function updateTotal_cost() {
    // Mendapatkan nilai quantity dan rate
    var quantity_cost =
        parseFloat(document.getElementById("quantity_cost").value) || 0;
    var rate_cost = parseFloat(document.getElementById("rate_cost").value) || 0;

    // Menghitung total
    var total_cost = quantity_cost * rate_cost;

    // Menampilkan hasilnya di elemen dengan id 'total' dengan format mata uang yang dipilih
    var currencyType_cost = document.getElementById("currencyType_cost").value;
    var currencyFormat_cost = currencyType_cost === "IDR" ? "id-ID" : "en-US";
    document.getElementById("total_cost").value = new Intl.NumberFormat(
        currencyFormat_cost,
        {
            style: "currency",
            currency: currencyType_cost,
        },
    ).format(total_cost);

    // Memanggil fungsi untuk menghitung dan menampilkan pajak
    updateTax_cost(total_cost, currencyType_cost);
}

function updateTax_cost(total_cost, currencyType_cost) {
    // Menghitung pajak (11% dari total)
    var tax_cost = total_cost * 0.11;

    // Menampilkan hasilnya di elemen dengan id 'tax' dengan format mata uang yang dipilih
    var currencyFormat_cost = currencyType_cost === "IDR" ? "id-ID" : "en-US";
    document.getElementById("tax_cost").value = new Intl.NumberFormat(
        currencyFormat_cost,
        {
            style: "currency",
            currency: currencyType_cost,
        },
    ).format(tax_cost);
}
// Memanggil fungsi updateTotal setiap kali nilai quantity atau rate berubah
document
    .getElementById("quantity_cost")
    .addEventListener("input", updateTotal_cost);
document
    .getElementById("rate_cost")
    .addEventListener("input", updateTotal_cost);

