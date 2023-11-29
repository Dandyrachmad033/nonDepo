var activityDate_worksheet = document.querySelector(
    'input[name="activity_date"]',
);
var noOrder_worksheet = document.querySelector('input[name="no_order"]');
var principal_worksheet = document.querySelector('input[name="principal"]');
var forwarder_worksheet = document.querySelector('input[name="forwarder"]');
var shipper_worksheet = document.querySelector('input[name="shipper"]');
var cargo_worksheet = document.querySelector('input[name="cargo"]');
var party_worksheet = document.querySelector('input[name="party"]');
var ClosingDate_worksheet = document.querySelector(
    'input[name="closing_date"]',
);
var remark_worksheet = document.querySelector('input[name="remark"]');

// Mendapatkan ID pengguna atau nama pengguna (sesuaikan dengan implementasi otentikasi Anda)

console.log(userId); // Fungsi ini harus mengembalikan ID pengguna atau nama pengguna

// Mendapatkan nilai dari localStorage saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
    activityDate_worksheet.value =
        localStorage.getItem(userId + "_activity_date_worksheet") || "";
    noOrder_worksheet.value =
        localStorage.getItem(userId + "_no_order_worksheet") || "";
    principal_worksheet.value =
        localStorage.getItem(userId + "_principal_worksheet") || "";
    forwarder_worksheet.value =
        localStorage.getItem(userId + "_forwarder_worksheet") || "";
    shipper_worksheet.value =
        localStorage.getItem(userId + "_shipper_worksheet") || "";
    cargo_worksheet.value =
        localStorage.getItem(userId + "_cargo_worksheet") || "";
    party_worksheet.value =
        localStorage.getItem(userId + "_party_worksheet") || "";
    ClosingDate_worksheet.value =
        localStorage.getItem(userId + "_ClosingDate_worksheet") || "";
    remark_worksheet.value =
        localStorage.getItem(userId + "_remark_worksheet") || "";
});

// Menangani perubahan pada elemen formulir
activityDate_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_activity_date_worksheet", this.value);
});
noOrder_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_no_order_worksheet", this.value);
});
principal_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_principal_worksheet", this.value);
});
forwarder_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_forwarder_worksheet", this.value);
});
shipper_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_shipper_worksheet", this.value);
});

cargo_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_cargo_worksheet", this.value);
});
party_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_party_worksheet", this.value);
});
ClosingDate_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_ClosingDate_worksheet", this.value);
});
remark_worksheet.addEventListener("change", function () {
    localStorage.setItem(userId + "_remark_worksheet", this.value);
});

// Menangani submit formulir
document.querySelector("form").addEventListener("submit", function () {
    // Hapus nilai-nilai dari localStorage setelah submit
    localStorage.removeItem(userId + "_activity_date_worksheet");
    localStorage.removeItem(userId + "_no_order_worksheet");
    localStorage.removeItem(userId + "_principal_worksheet");
    localStorage.removeItem(userId + "_forwarder_worksheet");
    localStorage.removeItem(userId + "_cargo_worksheet");
    localStorage.removeItem(userId + "_party_worksheet");
    localStorage.removeItem(userId + "_shipper_worksheet");
    localStorage.removeItem(userId + "_ClosingDate_worksheet");
    localStorage.removeItem(userId + "_remark_worksheet");
});
