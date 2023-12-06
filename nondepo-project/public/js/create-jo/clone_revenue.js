let cloneid = 1;

function cloneElement() {
    cloneid++;
    // Menduplikasi elemen yang ingin di-clone
    var originalElement = document.querySelector(".clone-this-one");
    var clonedElement = originalElement.cloneNode(true);

    // Membersihkan nilai input pada elemen yang di-clone

    clonedElement.querySelectorAll("input").forEach((input) => {
        var originalId = input.getAttribute("id");
        input.setAttribute("id", originalId + cloneid);
        input.value = ""; // Clear input values in the new form
    });
    var clonedbutton = clonedElement.querySelector("button");

    clonedbutton.style.display = "block";
    var originalSelectId = clonedElement
        .querySelector(".currencyType")
        .getAttribute("id");
    clonedElement
        .querySelector(".currencyType")
        .setAttribute("id", originalSelectId + cloneid);

    function updateTotal() {
        // Mendapatkan nilai quantity dan rate
        var quantity =
            parseFloat(document.getElementById("quantity" + cloneid).value) ||
            0;
        var rate =
            parseFloat(document.getElementById("rate" + cloneid).value) || 0;

        // Menghitung total
        var total = quantity * rate;

        // Menampilkan hasilnya di elemen dengan id 'total' dengan format mata uang yang dipilih
        var currencyType =
            document.getElementById("currencyType" + cloneid).value || 0;
        var currencyFormat = currencyType === "IDR" ? "id-ID" : "en-US";
        document.getElementById("total" + cloneid).value =
            new Intl.NumberFormat(currencyFormat, {
                style: "currency",
                currency: currencyType,
            }).format(total);

        // Memanggil fungsi untuk menghitung dan menampilkan pajak
        updateTax(total, currencyType);
    }

    function updateTax(total, currencyType) {
        // Menghitung pajak (11% dari total)
        var tax = total * 0.11;

        // Menampilkan hasilnya di elemen dengan id 'tax' dengan format mata uang yang dipilih
        var currencyFormat = currencyType === "IDR" ? "id-ID" : "en-US";
        document.getElementById("tax" + cloneid).value = new Intl.NumberFormat(
            currencyFormat,
            {
                style: "currency",
                currency: currencyType,
            },
        ).format(tax);
    }

    // Memanggil fungsi updateTotal setiap kali nilai quantity atau rate berubah
     updateTotalAllRevenue();
    // Menambahkan elemen yang di-clone ke dalam container
    document.querySelector(".clone-here").appendChild(clonedElement);
    document
        .getElementById("quantity" + cloneid)
        .addEventListener("input", updateTotal);
    document
        .getElementById("rate" + cloneid)
        .addEventListener("input", updateTotal);
   
}



function updateTotalAllRevenue() {
    var count = 1 ;
    var totalAllRevenue = 0;
    

    // Loop melalui semua elemen dengan class yang sesuai
    document.querySelectorAll('.total-all').forEach(function () {
        count++;
        var totalElement = document.getElementById('total'+count);
        var formattedValue = totalElement ? totalElement.value : 0;
        if(formattedValue != 0){

            var numericValue = getNumericValue(formattedValue);
            var string_number = numericValue.toString();
            var stringWithoutTwoZeros = string_number.slice(0, -2); 
            var total = parseFloat(stringWithoutTwoZeros) || 0; 
            
            totalAllRevenue += total;
            
            function getNumericValue(formattedValue) {
                if(formattedValue != 0){
                    var cleanedValue = formattedValue.replaceAll(/[^\d]/g, '');
        
                    // Mengonversi ke nilai numerik
                    var numericValue = parseInt(cleanedValue,10);
        
                    // Memeriksa apakah nilai numerik valid dan bukan NaN
                    if (!isNaN(numericValue)) {
                        return numericValue;
                    } 
    
                }else{
                      console.log("Nilai tidak valid atau tidak dapat dihitung.");
                        return null;
                }
                // Menghilangkan simbol mata uang dan karakter non-numerik
            }
           console.log(totalAllRevenue);
           document.getElementById("total_all_revenue").value = totalAllRevenue;
        }else{
            console.log("Nilai tidak valid atau tidak dapat dihitung.");
                        return null;
        }
    });
   
    // Setel nilai total_all_revenue dengan total yang dihitung
}

function removeElement(button) {
    // Mendapatkan elemen card yang berisi button Remove
    var cardElement = button.closest(".card");
    cardElement.remove();
}

function updateTotal() {
    // Mendapatkan nilai quantity dan rate
    var quantity = parseFloat(document.getElementById("quantity").value) || 0;
    var rate = parseFloat(document.getElementById("rate").value) || 0;

    // Menghitung total
    var total = quantity * rate;

    // Menampilkan hasilnya di elemen dengan id 'total' dengan format mata uang yang dipilih
    var currencyType = document.getElementById("currencyType").value;
    var currencyFormat = currencyType === "IDR" ? "id-ID" : "en-US";
    document.getElementById("total").value = new Intl.NumberFormat(
        currencyFormat,
        {
            style: "currency",
            currency: currencyType,
        },
    ).format(total);

    // Memanggil fungsi untuk menghitung dan menampilkan pajak
    updateTax(total, currencyType);
}

function updateTax(total, currencyType) {
    // Menghitung pajak (11% dari total)
    var tax = total * 0.11;

    // Menampilkan hasilnya di elemen dengan id 'tax' dengan format mata uang yang dipilih
    var currencyFormat = currencyType === "IDR" ? "id-ID" : "en-US";
    document.getElementById("tax").value = new Intl.NumberFormat(
        currencyFormat,
        {
            style: "currency",
            currency: currencyType,
        },
    ).format(tax);
}
// Memanggil fungsi updateTotal setiap kali nilai quantity atau rate berubah
document.getElementById("quantity").addEventListener("input", updateTotal);
document.getElementById("rate").addEventListener("input", updateTotal);

