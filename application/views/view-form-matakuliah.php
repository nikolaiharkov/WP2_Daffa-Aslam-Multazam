<html>
    <head>
        <title>Form Input Matakuliah</title>
        </head>
        <body>
            <center>
                <h2>Form Input Matakuliah</h2>
                <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
                    <table>
                        <tr>
                            <td>Kode MTK</td>
                            <td>:</td>
                            <td><input type="text" name="kode" placeholder="Masukkan Kode Matakuliah"></td>
                        </tr>
                        <tr>
                            <td>Nama MTK</td>
                            <td>:</td>
                            <td><input type="text" name="nama" placeholder="Masukkan Nama Matakuliah"></td>
                        </tr>
                        <tr>
                            <td>SKS</td>
                            <td>:</td>
                            <td>
                                <select name="sks" id="sks">
                                    <option value="">Pilih SKS</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <input type="submit" value="Simpan">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </body>
    </html>
