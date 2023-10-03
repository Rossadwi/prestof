<form action="">
    <!-- grub id -->
    <table>
        <tr>
            <td><label for="Film">Id Film</label></td>
            <td><input type="text" class="Film" id="Film" name="Film" /></td>
            <td><label for="mahasiswa">Id Mahasiswa</label></td>
            <td>
                <input type="text" class="mahasiswa" id="mahasiswa" name="mahasiswa" />
            </td>
        </tr>

        <tr>
            <td><label for="Judul">Judul Buku</label></td>
            <td><input type="text" class="Judul" id="Judul" name="Judul" /></td>
        </tr>
        <tr>
            <td><label for="Genre">Genre</label></td>
            <td>
                <input type="text" class="Genre" id="Genre" name="Genre" />
            </td>
        </tr>
        <tr>
            <td><label for="Deskripsi">Deskripsi</label></td>
            <td><input type="text" class="Deskripsi" id="Deskripsi" name="Deskripsi" /></td>
        </tr>

        <tr>
            <td><label for="Tanggal">Tanggal</label></td>
            <td>
                <input type="date" class="Tanggal" id="Tanggal" name="Tanggal" />
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><label for="link">Tautan</label></td>
            <td><input type="text" class="link" id="link" name="link" /></td>
        </tr>
    </table>

    <div class="aksi-container">
        Aksi Verifikasi :
        <input type="button" value="Tolak" id="tolak" class="tolak" />
        <input type="button" value="Terima" id="terima" class="terima" />
    </div>
</form>