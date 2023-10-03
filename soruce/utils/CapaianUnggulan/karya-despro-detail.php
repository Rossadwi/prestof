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
            <td><label for="Bentuk">Bentuk Desain</label></td>
            <td><input type="text" class="Bentuk" id="Bentuk" name="Bentuk" /></td>
        </tr>
        <tr>
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