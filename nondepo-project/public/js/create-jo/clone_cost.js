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
        updateTotalAllRevenue_cost()
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

function updateTotalAllRevenue_cost() {
    var count = 1 ;
    var totalAllRevenue = 0;
    

    // Loop melalui semua elemen dengan class yang sesuai
    document.querySelectorAll('.total-cost').forEach(function () {
        count++;
        var totalElementawal = document.getElementById('total_cost');
        var totalElement = document.getElementById('total_cost'+count);
        var formattedValue = totalElement ? totalElement.value : 0;
        var formattedAwal = totalElementawal ? totalElementawal.value : 0;

            if(formattedAwal != 0){
                var numericValue_awal = getNumericValue(formattedAwal);
                var string_number_awal = numericValue_awal.toString();
                var stringWithoutTwoZeros_awal = string_number_awal.slice(0, -2); 
                var total_awal = parseFloat(stringWithoutTwoZeros_awal) || 0;
                console.log(total_awal);
            }else{
                return null;
            }
            //nilai awal
            
            if(formattedValue != 0){
                var numericValue = getNumericValue(formattedValue);
                var string_number = numericValue.toString();
                var stringWithoutTwoZeros = string_number.slice(0, -2); 
                var total = parseFloat(stringWithoutTwoZeros) || 0; 

            }else{
                return null;
            }
            totalAllRevenue += total_awal;
            console.log(totalAllRevenue);
            // totalAllRevenue += total_awal;
            
            var totalFormatted = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(totalAllRevenue);
            function getNumericValue(value) {
                
                    var cleanedValue = value.replaceAll(/[^\d]/g, '');
        
                    // Mengonversi ke nilai numerik
                    var numericValue = parseInt(cleanedValue,10);
        
                    // Memeriksa apakah nilai numerik valid dan bukan NaN
                    if (!isNaN(numericValue)) {
                        return numericValue;
                    } 
    
                    return null;
                // Menghilangkan simbol mata uang dan karakter non-numerik
            }
        document.getElementById("total_all_cost").value = totalFormatted;
        
    });
    // Setel nilai total_all_revenue dengan total yang dihitung
    
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
    updateTotalAllRevenue_cost()
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

