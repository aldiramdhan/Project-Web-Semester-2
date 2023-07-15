<?php require_once "atas.php" ?>
<form style="margin-bottom: 50px;">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="alamat">Alamat Lengkap:</label>
    <input type="text" id="alamat" name="alamat" required>

    <label for="tanggal">Tanggal Pembelian:</label>
    <input type="date" id="tanggal" name="tanggal" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="hp">No.HP:</label>
    <input type="text" id="hp" name="hp" required>

    <label for="catatan">Catatan:</label>
    <textarea id="catatan" name="catatan" rows="4"></textarea>

    <label for="produk">Produk:</label>
    <select id="produk" name="produk" required>
        <option value="">-- Pilih Produk --</option>
        <option value="JERUK">JERUK</option>
        <option value="BLUEBERI">BLUEBERI</option>
        <option value="PISANG">PISANG</option>
        <option value="APEL">APEL</option>
        <option value="MANGGA">MANGGA</option>
        <option value="STRAWBERI">STRAWBERI</option>
    </select>

    <label for="jumlah">Jumlah:</label>
    <input type="number" id="jumlah" name="jumlah" min="1" max="10" required>

    <button type="submit" onclick="location.href='thanks.php'">Pesan Sekarang</button>
</form>

<?php require_once "bawah.php" ?>