<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA COVID-19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 </head>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="nav navbar-nav">
            <a class="nav-item- nav-link active" href="a"><i class="fa fa-fw fa-home"></i> Home <span class="ir-only"></span></a>
        </div>
    </nav>
    <h1>MASUKAN DATA</h1>
    <form action="simpan2.php" method="post">

    <p>
    <label for="wilayah">Pilih Wilayah:</label>
    <select name="wilayah">
        <option>DKI JAKARTA</option>
        <option>JAWA BARAT</option>
        <option>BANTEN</option>
        <option>JAWA TENGAH</option>
    </select>
    </p>

    <p>
    <label for="positif">Positif:</label>
    <input type="text" name="positif" placeholder="masukan jumlah positif">
    <label for="dirawat">Dirawat:</label>
    <input type="text" name="dirawat" placeholder="masukan jumlah dirawat">
    <label for="sembuh">Sembuh:</label>
    <input type="text" name="sembuh" placeholder = "masukan jumlah sembuh">

    </p>

    <p>
    <label for="meninggal">Meninggal</label>
    <input type="text" name="meninggal" placeholder="masukan jumlah meninggal">
    <label for="operator">Nama Operator</label>
    <input type="text" name="operator" placeholder="masukan nama operator">
    <label for="NIM">NIM Mahasiswa</label>
    <input type="text" name="NIM" placeholder="masukan nim">
    </p>


    <button type="submit" name="submit">INPUT</button>
    </form>
    <br>


    <p>Hasil:</p>
</body>
</html>