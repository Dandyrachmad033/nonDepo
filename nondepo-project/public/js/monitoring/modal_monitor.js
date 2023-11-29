function openModalMonitor(button) {
    localStorage.setItem("modalStatusEnd", "open");
    var noContainerValue = button.getAttribute("data-no-container");
    var setTempValue = button.getAttribute("data-set-temp");
    var remarkValue = button.getAttribute("data-remark");

    localStorage.setItem("noContainer", noContainerValue);
    localStorage.setItem("setTemp", setTempValue);
    localStorage.setItem("remark", remarkValue);
}

function closeModalMonitor() {
    $("#monitoring_plug").modal("hide");
    localStorage.setItem("modalStatusEnd", "closed");
    localStorage.removeItem("noContainer");
    localStorage.removeItem("setTemp");
    localStorage.removeItem("remark");
}

$(document).ready(function () {
    var modalStatus = localStorage.getItem("modalStatusEnd");
    if (modalStatus === "open") {
        $("#monitoring_plug").modal("show");
        var noContainerValue = localStorage.getItem("noContainer");
        var setTempValue = localStorage.getItem("setTemp");
        $("#modal_no_container").val(noContainerValue);
        $("#modal_set_temp").val(setTempValue);
    } else {
        $("#monitoring_plug").modal("hide");
    }
});

$(document).ready(function () {
    $("#monitoring_plug").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var no_container = button.data("no-container");
        var set_temp = button.data("set-temp");
        var last_monitor = button.data("last-monitor");

        var modal = $(this);
        modal.find("#modal_no_container").val(no_container);
        modal.find("#modal_set_temp").val(set_temp);
        modal.find("#modal_last_monitor").val(last_monitor);
    });
});

