<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pembayaran Zakat</title>
        <link rel="stylesheet" href="css/style5.css">
    </head>
    <body>
        <form class="box" action="/create" method="POST">
            @csrf
                <div class="box">
                    <h1>Pembayaran</h1>
                    
                    <input type="text" name="nama" placeholder="Nama Pembayar">
                    <div>
                        <select name="jenis" id="" class="jns">
                            <option selected>Pilih Jenis Pembayaran</option>
                            <option value="beras">BERAS</option>
                            <option value="uang">UANG</option>
                        </select>
                    </div>
                    <input type="text" name="jumlah" placeholder="Jumlah" style="margin-top: 40px">
                    <div class="box1"><input type="submit" name="" value="Submit"></div>
                </div>
        </form>        
    </body>
</html>