document.getElementById("send_data").addEventListener("click", function () {
    var form1 = document.getElementById("start_plug");
    var successModal = new bootstrap.Modal(
        document.getElementById("successModal"),
    );
    successModal.show();
    form1.submit();
});

document.getElementById("send_data_end").addEventListener("click", function () {
    var form2 = document.getElementById("end_plug_end");
    form2.submit();
    var successModal = new bootstrap.Modal(
        document.getElementById("successModal"),
    );
    successModal.show();
});