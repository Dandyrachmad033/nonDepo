function simpanKeDatabase() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/bongkar_update',
                method: 'POST',
                data: datasementara,
                dataType: 'json',
                success: function(response) {
                    console.log('Nilai berhasil diperbarui ke database');
                    console.log(response);


                },
                error: function(error) {
                    console.error('Gagal memperbarui nilai ke database: ' + error);

                }
            });
        }