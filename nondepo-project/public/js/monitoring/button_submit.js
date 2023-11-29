document.getElementById("send_data").addEventListener("click", function () {
    var form1 = document.getElementById("start_monitor");
    form1.submit();
    var successModal = new bootstrap.Modal(
        document.getElementById("successModal"),
    );
    successModal.show();
});
