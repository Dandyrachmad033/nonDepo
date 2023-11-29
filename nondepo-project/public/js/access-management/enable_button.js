document.addEventListener("DOMContentLoaded", function() {
                // Ketika tombol Nonaktifkan diklik
                document.getElementById("enableButton").addEventListener("click", function() {
                    // Temukan semua kotak centang yang dicentang
                    var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

                    checkboxes.forEach(function(checkbox) {
                        // Dapatkan nama modul yang sesuai
                        var moduleName = checkbox.closest("tr").querySelector(".moduleName")
                            .textContent;


                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '/enable',
                            method: 'POST',
                            data: {
                                'moduleName': moduleName,

                            },
                            dataType: 'json',
                            success: function(response) {
                                console.log('Nilai berhasil diperbarui ke database');
                                console.log(response);
                                window.location.reload();


                            },
                            error: function(error) {
                                console.error('Gagal memperbarui nilai ke database: ' +
                                    error);

                            }
                        });

                        // Me-refresh halaman setelah tindakan selesai

                    });
                });
            });