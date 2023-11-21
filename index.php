<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sarapan</title>
</head>
<body>
    <h2>Form Sarapan</h2>
    <form action="proses_input.php" method="post">
        <label for="makan">Makan:</label>
        <input type="text" id="makan" name="makan" required>

        <label for="minum">Minum:</label>
        <select id="minum" name="minum" required>
            <option value="air">Air</option>
            <option value="teh">Teh</option>
            <option value="kopi">Kopi</option>
            <!-- Tambahkan opsi sesuai kebutuhan -->
        </select>

        <label for="cemilan">Cemilan:</label>
        <div>
            <input type="checkbox" id="cemilan1" name="cemilan" value="keripik" >
            <label for="cemilan1">Keripik</label>

            <input type="checkbox" id="cemilan2" name="cemilan" value="coklat" >
            <label for="cemilan2">Coklat</label>

            <!-- Tambahkan opsi sesuai kebutuhan -->
        </div>

        <label for="rokok">Rokok:</label>
        <input type="number" id="rokok" name="rokok" required>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required>

        <input type="submit" value="Kirim">
    </form>

    <script>
        // JavaScript untuk validasi formulir
        document.querySelector('form').addEventListener('submit', function(event) {
            var errors = [];

            // Validasi input makan
            var makanInput = document.getElementById('makan');
            if (makanInput.value.trim() === '') {
                errors.push('Makan harus diisi');
            }

            // Validasi input rokok
            var rokokInput = document.getElementById('rokok');
            if (rokokInput.value.trim() === '' || isNaN(rokokInput.value)) {
                errors.push('Rokok harus diisi dengan angka');
            }

            // Validasi input tanggal
            var tanggalInput = document.getElementById('tanggal');
            if (tanggalInput.value.trim() === '') {
                errors.push('Tanggal harus diisi');
            }

            // Tampilkan pesan error jika ada
            if (errors.length > 0) {
                event.preventDefault(); // Mencegah pengiriman formulir jika terdapat kesalahan
                alert(errors.join('\n'));
            }
        });
    </script>
</body>
</html>

