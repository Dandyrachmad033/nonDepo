var activityDate_tally = document.querySelector('input[name="activity_date"]');
var noOrder_tally = document.querySelector('input[name="no_order"]');
var principal_tally = document.querySelector('input[name="principal"]');
var forwarder_tally = document.querySelector('input[name="forwarder"]');
var cargo_tally = document.querySelector('input[name="cargo"]');
var party_tally = document.querySelector('input[name="party"]');
var containerStrip_tally = document.querySelector(
    'input[name="container_strip"]',
);
var Quantity_tally = document.querySelector('input[name="quantity"]');
var containerStuf_tally = document.querySelector(
    'input[name="container_stuf"]',
);

// Mendapatkan nilai dari localStorage saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
    activityDate_tally.value =
        localStorage.getItem("activity_date_tally_" + userId) || "";
    noOrder_tally.value =
        localStorage.getItem("no_order_tally_" + userId) || "";
    principal_tally.value =
        localStorage.getItem("principal_tally_" + userId) || "";
    forwarder_tally.value =
        localStorage.getItem("forwarder_tally_" + userId) || "";
    cargo_tally.value = localStorage.getItem("cargo_tally_" + userId) || "";
    party_tally.value = localStorage.getItem("party_tally_" + userId) || "";
    containerStrip_tally.value =
        localStorage.getItem("container_strip_tally_" + userId) || "";
    Quantity_tally.value =
        localStorage.getItem("quantity_tally_" + userId) || "";
    containerStuf_tally.value =
        localStorage.getItem("container_stuf_tally_" + userId) || "";
});

// Menangani perubahan pada elemen formulir
activityDate_tally.addEventListener("change", function () {
    localStorage.setItem("activity_date_tally_" + userId, this.value);
});
noOrder_tally.addEventListener("change", function () {
    localStorage.setItem("no_order_tally_" + userId, this.value);
});
principal_tally.addEventListener("change", function () {
    localStorage.setItem("principal_tally_" + userId, this.value);
});
forwarder_tally.addEventListener("change", function () {
    localStorage.setItem("forwarder_tally_" + userId, this.value);
});

cargo_tally.addEventListener("change", function () {
    localStorage.setItem("cargo_tally_" + userId, this.value);
});
party_tally.addEventListener("change", function () {
    localStorage.setItem("party_tally_" + userId, this.value);
});
containerStrip_tally.addEventListener("change", function () {
    localStorage.setItem("container_strip_tally_" + userId, this.value);
});
Quantity_tally.addEventListener("change", function () {
    localStorage.setItem("quantity_tally_" + userId, this.value);
});
containerStuf_tally.addEventListener("change", function () {
    localStorage.setItem("container_stuf_tally_" + userId, this.value);
});

// Menangani submit formulir
document.querySelector("form").addEventListener("submit", function () {
    // Hapus nilai-nilai dari localStorage setelah submit
    localStorage.removeItem("activity_date_tally_" + userId);
    localStorage.removeItem("no_order_tally_" + userId);
    localStorage.removeItem("principal_tally_" + userId);
    localStorage.removeItem("forwarder_tally_" + userId);

    localStorage.removeItem("cargo_tally_" + userId);
    localStorage.removeItem("party_tally_" + userId);
    localStorage.removeItem("container_strip_tally_" + userId);
    localStorage.removeItem("quantity_tally_" + userId);
    localStorage.removeItem("container_stuf_tally_" + userId);
});
