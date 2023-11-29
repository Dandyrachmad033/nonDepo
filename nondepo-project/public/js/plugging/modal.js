function openModal() {
    localStorage.setItem("modalStatus", "open");
}
function openModalEnd(button) {
    localStorage.setItem("modalStatusEnd", "open");
    var noContainerValue = button.getAttribute("data-no-container");
    var setTempValue = button.getAttribute("data-set-temp");
    localStorage.setItem("noContainer", noContainerValue);
    localStorage.setItem("setTemp", setTempValue);
}
function closeModal() {
    $("#exampleModal").modal("hide");
    localStorage.setItem("modalStatus", "closed");
    localStorage.removeItem("no_container");
    localStorage.removeItem("set_temp");
    localStorage.removeItem("sup_temp");
    localStorage.removeItem("ret_temp");
}
function closeModalEnd() {
    $("#end_plugging").modal("hide");
    localStorage.setItem("modalStatusEnd", "closed");
    localStorage.removeItem("noContainer");
    localStorage.removeItem("setTemp");
}
// Periksa localStorage saat halaman dimuat
$(document).ready(function () {
    var modalStatus = localStorage.getItem("modalStatus");
    if (modalStatus === "open") {
        $("#exampleModal").modal("show");
        var NoContainer = localStorage.getItem("no_container");
        var SetTemp = localStorage.getItem("set_temp");
        var SupTemp = localStorage.getItem("sup_temp");
        var RetTemp = localStorage.getItem("ret_temp");
        $("#no_container").val(NoContainer);
        $("#set_temp").val(SetTemp);
        $("#sup_temp").val(SupTemp);
        $("#ret_temp").val(RetTemp);
    } else {
        $("#exampleModal").modal("hide");
    }
});
$(document).ready(function () {
    var modalStatus = localStorage.getItem("modalStatusEnd");
    if (modalStatus === "open") {
        $("#end_plugging").modal("show");
        var noContainerValue = localStorage.getItem("noContainer");
        var setTempValue = localStorage.getItem("setTemp");
        $("#modal_no_container").val(noContainerValue);
        $("#modal_set_temp").val(setTempValue);
    } else {
        $("#end_plugging").modal("hide");
    }
});
