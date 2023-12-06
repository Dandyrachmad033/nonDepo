$(document).ready(function () {
    //jquery for toggle sub menus
    $(".sub-btn").click(function () {
        $(this).next(".sub-menu").slideToggle();
        $(this).find(".dropdown").toggleClass("rotate");
    });
});

$(document).ready(function () {
    // Check localStorage value and open sidebar if previously saved as 'open'
    var sidebarStatus = localStorage.getItem("sidebarStatus");
    if (sidebarStatus === "open") {
        $(".sub-btn").click(function () {
            $(".sidebar").addClass("active");
            $(".menu-btn").css("visibility", "hidden");
        });
    }

    $(".menu-btn").click(function () {
        $(".sidebar").addClass("active");
        $(".menu-btn").css("visibility", "hidden");

        // Save sidebar status as 'open' in localStorage
        localStorage.setItem("sidebarStatus", "open");
    });

    $(".close-btn-rn").click(function () {
        $(".sidebar").removeClass("active");
        $(".menu-btn").css("visibility", "visible");

        // Save sidebar status as 'closed' in localStorage
        localStorage.setItem("sidebarStatus", "closed");
    });
});

$(document).ready(function () {
    $("#end_plugging").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var id = button.data("id-plug");
        var no_container = button.data("no-container");
        var set_temp = button.data("set-temp");
        var remark = button.data("remark");
        var time = button.data("time-plug");

        var modal = $(this);
        modal.find("#modal_no_container").val(no_container);
        modal.find("#modal_set_temp").val(set_temp);
        modal.find("#modal_remark").val(remark);
        modal.find("#modal_id").val(id);
        modal.find("#modal_time").val(time);
    });

    $("#monitoring_plug").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var id = button.data("id");
        var no_container = button.data("no-container");
        var set_temp = button.data("set-temp");
        var last_monitor = button.data("last-monitor");

        var modal = $(this);
        modal.find("#modal_no_container").val(no_container);
        modal.find("#modal_set_temp").val(set_temp);
        modal.find("#modal_last_monitor").val(last_monitor);
    });
});

function validateNoContainer() {
    var noContainerInput = document.getElementById("no_container");
    var noContainerValue = noContainerInput.value;
    var errorContainer = document.getElementById("no_container_error");
    localStorage.setItem("no_container", noContainerValue);
    // You can add your validation logic here.
    // For example, check if the input has exactly 11 characters.
    if (noContainerValue.length !== 11) {
        // Display the error message
        noContainerInput.classList.add("is-invalid");
        noContainerInput.classList.remove("border-dark");
        noContainerInput.classList.add("border-danger");
        errorContainer.classList.add("invalid-feedback");
        errorContainer.textContent = "Harus 11 Karakter";
    } else {
        // Remove the error message if input is valid
        noContainerInput.classList.remove("is-invalid");
        noContainerInput.classList.remove("border-danger");
        noContainerInput.classList.add("border-dark");
    }
}

function validatesettemp() {
    var settemp = document.getElementById("set_temp");
    var settempvalue = settemp.value;
    var errorsettemp = document.getElementById("settemp_error");
    localStorage.setItem("set_temp", settempvalue);
    // You can add your validation logic here.
    // For example, check if the input has exactly 11 characters.
    if (!/^\d+$/.test(settempvalue)) {
        // Display the error message
        settemp.classList.add("is-invalid");
        settemp.classList.remove("border-dark");
        settemp.classList.add("border-danger");
        errorsettemp.classList.add("invalid-feedback");
        errorsettemp.textContent = "Harus berupa Angka";
    } else {
        // Remove the error message if input is valid
        settemp.classList.remove("is-invalid");
        settemp.classList.remove("border-danger");
        settemp.classList.add("border-dark");
    }
}

function validatesuptemp() {
    var suptemp = document.getElementById("sup_temp");
    var suptempvalue = suptemp.value;
    var errorsuptemp = document.getElementById("suptemp_error");
    localStorage.setItem("sup_temp", suptempvalue);

    if (!/^\d+$/.test(suptempvalue)) {
        // Display the error message
        suptemp.classList.add("is-invalid");
        suptemp.classList.remove("border-dark");
        suptemp.classList.add("border-danger");
        errorsuptemp.classList.add("invalid-feedback");
        errorsuptemp.textContent = "Harus berupa Angka";
    } else {
        // Remove the error message if input is valid
        suptemp.classList.remove("is-invalid");
        suptemp.classList.remove("border-danger");
        suptemp.classList.add("border-dark");
    }
}

function validaterettemp() {
    var rettemp = document.getElementById("ret_temp");
    var rettempvalue = rettemp.value;
    var errorrettemp = document.getElementById("rettemp_error");
    localStorage.setItem("ret_temp", rettempvalue);
    // You can add your validation logic here.
    // For example, check if the input has exactly 11 characters.
    if (!/^\d+$/.test(rettempvalue)) {
        // Display the error message
        rettemp.classList.add("is-invalid");
        rettemp.classList.remove("border-dark");
        rettemp.classList.add("border-danger");
        errorrettemp.classList.add("invalid-feedback");
        errorrettemp.textContent = "Harus berupa Angka";
    } else {
        // Remove the error message if input is valid
        rettemp.classList.remove("is-invalid");
        rettemp.classList.remove("border-danger");
        rettemp.classList.add("border-dark");
    }
}

function validatesuptempend() {
    var suptempend = document.getElementById("sup_temp_end");
    var suptempendvalue = suptempend.value;
    var errorsuptempend = document.getElementById("suptempend_error");

    // You can add your validation logic here.
    // For example, check if the input has exactly 11 characters.
    if (!/^\d+$/.test(suptempendvalue)) {
        // Display the error message
        suptempend.classList.add("is-invalid");
        suptempend.classList.remove("border-dark");
        suptempend.classList.add("border-danger");
        errorsuptempend.classList.add("invalid-feedback");
        errorsuptempend.textContent = "Harus berupa Angka";
    } else {
        // Remove the error message if input is valid
        suptempend.classList.remove("is-invalid");
        suptempend.classList.remove("border-danger");
        suptempend.classList.add("border-dark");
    }
}

function validaterettempend() {
    var rettempend = document.getElementById("ret_temp_end");
    var rettempendvalue = rettempend.value;
    var errorrettempend = document.getElementById("rettempend_error");

    // You can add your validation logic here.
    // For example, check if the input has exactly 11 characters.
    if (!/^\d+$/.test(rettempendvalue)) {
        // Display the error message
        rettempend.classList.add("is-invalid");
        rettempend.classList.remove("border-dark");
        rettempend.classList.add("border-danger");
        errorrettempend.classList.add("invalid-feedback");
        errorrettempend.textContent = "Harus berupa Angka";
    } else {
        // Remove the error message if input is valid
        rettempend.classList.remove("is-invalid");
        rettempend.classList.remove("border-danger");
        rettempend.classList.add("border-dark");
    }
}
