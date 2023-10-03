<form action="">
    <!-- grub id -->
    <table>
        <tr>
            <td><label for="Desain">Id Desain</label></td>
            <td><input type="text" class="Desain" id="Desain" name="Desain" /></td>
            <td><label for="mahasiswa">Id Mahasiswa</label></td>
            <td>
                <input type="text" class="mahasiswa" id="mahasiswa" name="mahasiswa" />
            </td>
        </tr>

        <tr>
            <td><label for="Bentuk">Bentuk</label></td>
            <td><input type="text" class="Bentuk" id="Bentuk" name="Bentuk" /></td>
        </tr>
        <tr>
            <td><label for="Deskripsi">Deskripsi</label></td>
            <td><input type="text" class="Deskripsi" id="Deskripsi" name="Deskripsi" /></td>
        </tr>
        <tr>
            <td><label for="Tahun">Tahun</label></td>
            <td><input type="number" class="Tahun" id="Tahun" name="Tahun" /></td>
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