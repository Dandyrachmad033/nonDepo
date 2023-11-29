var activityDate_release = document.querySelector(
    'input[name="activity_date"]',
);
var noOrder_release = document.querySelector('input[name="no_order"]');
var principal_release = document.querySelector('input[name="principal"]');
var con_size_release = document.querySelector('input[name="con_size"]');
var veh_type_release = document.querySelector('input[name="veh_type"]');
var veh_id_release = document.querySelector('input[name="veh_id"]');
var remark_release = document.querySelector('input[ name="remark"]');

// Mendapatkan nilai dari localStorage saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
    activityDate_release.value =
        localStorage.getItem("activity_date_release_" + userId) || "";
    noOrder_release.value =
        localStorage.getItem("no_order_release_" + userId) || "";
    principal_release.value =
        localStorage.getItem("principal_release_" + userId) || "";
    veh_type_release.value =
        localStorage.getItem("veh_type_release_" + userId) || "";
    veh_id_release.value =
        localStorage.getItem("veh_id_release_" + userId) || "";
    con_size_release.value =
        localStorage.getItem("con_size_release_" + userId) || "";
    remark_release.value =
        localStorage.getItem("remark_release_" + userId) || "";
});

// Menangani perubahan pada elemen formulir
activityDate_release.addEventListener("change", function () {
    localStorage.setItem("activity_date_release_" + userId, this.value);
});
noOrder_release.addEventListener("change", function () {
    localStorage.setItem("no_order_release_" + userId, this.value);
});
principal_release.addEventListener("change", function () {
    localStorage.setItem("principal_release_" + userId, this.value);
});
veh_type_release.addEventListener("change", function () {
    localStorage.setItem("veh_type_release_" + userId, this.value);
});

veh_id_release.addEventListener("change", function () {
    localStorage.setItem("veh_id_release_" + userId, this.value);
});
con_size_release.addEventListener("change", function () {
    localStorage.setItem("con_size_release_" + userId, this.value);
});
remark_release.addEventListener("change", function () {
    localStorage.setItem("remark_release_" + userId, this.value);
});

// Menangani submit formulir
document.querySelector("form").addEventListener("submit", function () {
    // Hapus nilai-nilai dari localStorage setelah submit
    localStorage.removeItem("activity_date_release_" + userId);
    localStorage.removeItem("no_order_release_" + userId);
    localStorage.removeItem("principal_release_" + userId);
    localStorage.removeItem("veh_type_release_" + userId);

    localStorage.removeItem("veh_id_release_" + userId);
    localStorage.removeItem("con_size_release_" + userId);
    localStorage.removeItem("remark_release_" + userId);
});
document.addEventListener("DOMContentLoaded", function () {
    restoreCheckboxState("flexCheckDefault1");
    restoreCheckboxState("flexCheckDefault2");
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
