var activityDate_receiving = document.querySelector(
    'input[name="activity_date"]',
);
var noOrder_receiving = document.querySelector('input[name="no_order"]');
var principal_receiving = document.querySelector('input[name="principal"]');
var con_size_receiving = document.querySelector('input[name="con_size"]');
var veh_type_receiving = document.querySelector('input[name="veh_type"]');
var veh_id_receiving = document.querySelector('input[name="veh_id"]');
var remark_receiving = document.querySelector('input[ name="remark"]');

// Mendapatkan nilai dari localStorage saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
    activityDate_receiving.value =
        localStorage.getItem("activity_date_receiving_" + userId) || "";
    noOrder_receiving.value =
        localStorage.getItem("no_order_receiving_" + userId) || "";
    principal_receiving.value =
        localStorage.getItem("principal_receiving_" + userId) || "";
    veh_type_receiving.value =
        localStorage.getItem("veh_type_receiving_" + userId) || "";
    veh_id_receiving.value =
        localStorage.getItem("veh_id_receiving_" + userId) || "";
    con_size_receiving.value =
        localStorage.getItem("con_size_receiving_" + userId) || "";
    remark_receiving.value =
        localStorage.getItem("remark_receiving_" + userId) || "";
});

// Menangani perubahan pada elemen formulir
activityDate_receiving.addEventListener("change", function () {
    localStorage.setItem("activity_date_receiving_" + userId, this.value);
});
noOrder_receiving.addEventListener("change", function () {
    localStorage.setItem("no_order_receiving_" + userId, this.value);
});
principal_receiving.addEventListener("change", function () {
    localStorage.setItem("principal_receiving_" + userId, this.value);
});
veh_type_receiving.addEventListener("change", function () {
    localStorage.setItem("veh_type_receiving_" + userId, this.value);
});

veh_id_receiving.addEventListener("change", function () {
    localStorage.setItem("veh_id_receiving_" + userId, this.value);
});
con_size_receiving.addEventListener("change", function () {
    localStorage.setItem("con_size_receiving_" + userId, this.value);
});
remark_receiving.addEventListener("change", function () {
    localStorage.setItem("remark_receiving_" + userId, this.value);
});

// Menangani submit formulir
document.querySelector("form").addEventListener("submit", function () {
    // Hapus nilai-nilai dari localStorage setelah submit
    localStorage.removeItem("activity_date_receiving_" + userId);
    localStorage.removeItem("no_order_receiving_" + userId);
    localStorage.removeItem("principal_receiving_" + userId);
    localStorage.removeItem("veh_type_receiving_" + userId);

    localStorage.removeItem("veh_id_receiving_" + userId);
    localStorage.removeItem("con_size_receiving_" + userId);
    localStorage.removeItem("remark_receiving_" + userId);
});

document.addEventListener("DOMContentLoaded", function () {
    restoreCheckboxState("flexCheckDefault1");
    restoreCheckboxState("flexCheckDefault2");
    restoreCheckboxState("flexCheckDefault3");
    restoreCheckboxState("flexCheckDefault4");
    restoreCheckboxState("flexCheckDefault5");
});

// Save checkbox state to local storage when checkbox is clicked
document.querySelectorAll(".form-check-input").forEach(function (checkbox) {
    checkbox.addEventListener("change", function () {
        saveCheckboxState(checkbox.id);
    });
});

function saveCheckboxState(checkboxId) {
    const checkbox = document.getElementById(checkboxId);
    localStorage.setItem(checkboxId, checkbox.checked);
}

function restoreCheckboxState(checkboxId) {
    const checkbox = document.getElementById(checkboxId);
    const isChecked = localStorage.getItem(checkboxId) === "true";
    checkbox.checked = isChecked;
}
