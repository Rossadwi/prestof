<form action="">
    <!-- grub id -->
    <table>
        <tr>
            <td><label for="Artikel">Id Artikel</label></td>
            <td><input type="text" class="Artikel" id="Artikel" name="Artikel" /></td>
            <td><label for="mahasiswa">Id Mahasiswa</label></td>
            <td>
                <input type="text" class="mahasiswa" id="mahasiswa" name="mahasiswa" />
            </td>
        </tr>

        <tr>
            <td><label for="Judul">Judul</label></td>
            <td><input type="text" class="Judul" id="Judul" name="Judul" /></td>
        </tr>
        <tr>
            <td><label for="penerbit">Penerbit</label></td>
            <td>
                <input type="text" class="penerbit" id="penerbit" name="penerbit" />
            </td>
        </tr>
        <tr>
            <td><label for="tangter">Tanggal Terbit</label></td>
            <td><input type="date" class="tangter" id="tangter" name="tangter" /></td>
        </tr>
        <tr>
            <td><label for="Link">Link Artikel</label></td>
            <td><input type="text" class="Link" id="Link" name="Link" /></td>
        </tr>

    </table>

    <div class="aksi-container">
        Aksi Verifikasi :
        <input type="button" value="Tolak" id="tolak" class="tolak" />
        <input type="button" value="Terima" id="terima" class="terima" />
    </div>
</form>