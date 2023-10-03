<form action="">
    <!-- grub id -->
    <table>
        <tr>
            <td><label for="Kompetisi">Id Kompetisi</label></td>
            <td><input type="text" class="Kompetisi" id="Kompetisi" name="Kompetisi" /></td>
            <td><label for="mahasiswa">Id Mahasiswa</label></td>
            <td>
                <input type="text" class="mahasiswa" id="mahasiswa" name="mahasiswa" />
            </td>
        </tr>

        <tr>
            <td><label for="Nama">Nama Kompetisi</label></td>
            <td><input type="text" class="Nama" id="Nama" name="Nama" /></td>
        </tr>
        <tr>
            <td><label for="Deskripsi">Deskripsi</label></td>
            <td><input type="text" class="Deskripsi" id="Deskripsi" name="Deskripsi" /></td>
        </tr>
        <tr>
            <td><label for="kategori">Individu/tim</label></td>
            <td>
                <select name="kategori" id="kategori">
                    <option value="individu">Individu</option>
                    <option value="tim">Tim</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="Penyelenggara">Penyelenggara</label></td>
            <td><input type="text" class="Penyelenggara" id="Penyelenggara" name="Penyelenggara" /></td>
        </tr>

        <tr>
            <td><label for="Tahun">Tahun</label></td>
            <td>
                <input type="number" class="Tahun" id="Tahun" name="Tahun" />
            </td>
        </tr>

        <tr>
            <td><label for="Kategori">Kategori</label></td>
            <td><input type="text" class="Kategori" id="Kategori" name="Kategori" /></td>
        </tr>

        <tr>
            <td><label for="Dokumentasi">Dokumentasi</label></td>
            <td><input type="file" name="Dokumentasi" id="Dokumentasi" /></td>
        </tr>

        <tr>
            <td><label for="Bukti">Bukti Sertifikat</label></td>
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