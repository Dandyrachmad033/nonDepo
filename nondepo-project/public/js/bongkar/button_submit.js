function updateButton(value) {
    // Update the button text with the selected value
    document.getElementById("valuelink").innerText = value;
    document.getElementById("dropdownMenuLink").value = value;
}

document.getElementById("send_data").addEventListener("click", function () {
    var form1 = document.getElementById("submit_data");
    form1.submit();
});

document.getElementById("send_logout").addEventListener("click", function () {
    var form2 = document.getElementById("submit_logout");
    form2.submit();
});
