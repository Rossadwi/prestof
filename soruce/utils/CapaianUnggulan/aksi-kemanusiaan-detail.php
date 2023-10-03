<form action="">
    <!-- grub id -->
    <table>
        <tr>
            <td><label for="Aksi">Id Aksi</label></td>
            <td><input type="text" class="Aksi" id="Aksi" name="Aksi" /></td>
            <td><label for="mahasiswa">Id Mahasiswa</label></td>
            <td>
                <input type="text" class="mahasiswa" id="mahasiswa" name="mahasiswa" />
            </td>
        </tr>

        <tr>
            <td><label for="jenis">Jenis Buku</label></td>
            <td><input type="text" class="jenis" id="jenis" name="jenis" /></td>
        </tr>
        <tr>
            <td><label for="Judul">Judul Buku</label></td>
            <td><input type="text" class="Judul" id="Judul" name="Judul" /></td>
        </tr>
        <tr>
            <td><label for="penerbit">Penerbit</label></td>
            <td>
                <input type="text" class="penerbit" id="penerbit" name="penerbit" />
            </td>
        </tr>
        <tr>
            <td><label for="ISBN">Nomor ISBN</label></td>
            <td><input type="text" class="ISBN" id="ISBN" name="ISBN" /></td>
        </tr>

        <tr>
            <td><label for="Halaman">Jumlah Halaman</label></td>
            <td>
                <input type="number" class="Halaman" id="Halaman" name="Halaman" />
            </td>
            <td><label for="Tahun">Tahun</label></td>
            <td>
                <input type="number" class="Tahun" id="Tahun" name="Tahun" />
            </td>
        </tr>

        <tr>
            <td><label for="Bukti">Bukti</label></td>
            <td><input type="file" name="Bukti" id="Bukti" /></td>
        </tr>
    </table>

    <p>ukuran maksimal file 15MB. file dapat berupa png,jpg, jpeg dan atau pdf</p>

    <div class="aksi-container">
        Aksi Verifikasi :
        <input type="button" value="Tolak" id="tolak" class="tolak" />
        <input type="button" value="Terima" id="terima" class="terima" />
    </div>
</form>