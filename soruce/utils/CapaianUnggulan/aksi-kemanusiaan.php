<form action="">
    <!-- grub id -->
    <table>
        <tr>
            <td><label for="Aksi">Id Aksi Kemanusiaan</label></td>
            <td><input type="text" class="Aksi" id="Aksi" name="Aksi" /></td>
            <td><label for="mahasiswa">Id Mahasiswa</label></td>
            <td>
                <input type="text" class="mahasiswa" id="mahasiswa" name="mahasiswa" />
            </td>
        </tr>

        <tr>
            <td><label for="Bentuk">Bentuk Pengabdian</label></td>
            <td><input type="text" class="Bentuk" id="Bentuk" name="Bentuk" /></td>
        </tr>
        <tr>
            <td><label for="Deskripsi">Deskripsi Pengabdian</label></td>
            <td><input type="text" class="Deskripsi" id="Deskripsi" name="Deskripsi" /></td>
        </tr>
        <tr>
            <td><label for="Penyelenggara">Penyelenggara</label></td>
            <td>
                <input type="text" class="Penyelenggara" id="Penyelenggara" name="Penyelenggara" />
            </td>
        </tr>
        <tr>
            <td><label for="Lokasi">Lokasi Pengabdian</label></td>
            <td><input type="text" class="Lokasi" id="Lokasi" name="Lokasi" /></td>
        </tr>

        <tr>
            <td><label for="Tanggal">Tanggal</label></td>
            <td>
                <input type="date" class="Tanggal" id="Tanggal" name="Tanggal" />
            </td>
        </tr>

        <tr>
            <td><label for="Bukti">Dokumentasi</label></td>
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