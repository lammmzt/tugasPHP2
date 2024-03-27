<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center fw-bold">
                        FORM BELANJA
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Pelanggan</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Masukan nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="produk" class="form-label">Produk Pilihan</label>
                                        <select class="form-select" aria-label="Default select example" name="produk"
                                            required>
                                            <option selected>Pilih Produk</option>
                                            <option value="TV">TV</option>
                                            <option value="Kulkas">Kulkas</option>
                                            <option value="Mesin Cuci">Mesin Cuci</option>
                                            <option value="AC">AC</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah" class="form-label">Jumlah Beli</label>
                                        <input type="number" class="form-control" id="jumlah" name="jumlah"
                                            placeholder="Masukan jumlah" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                        <?php

                            $harga = 0;
                            if (isset($_POST['nama'])) {
                                $nama = $_POST['nama'];
                                $produk = $_POST['produk'];
                                $jumlah = $_POST['jumlah'];

                                switch ($produk) {
                                    case 'TV':
                                        $harga = 2000000;
                                        break;
                                    case 'Kulkas':
                                        $harga = 3000000;
                                        break;
                                    case 'Mesin Cuci':
                                         $harga = 1500000;
                                        break;
                                     case 'AC':
                                        $harga = 4000000;
                                        break;
                            }
                                        

                            $total_belanja = $harga * $jumlah;
                            $diskon = 0.2 * $total_belanja;
                            $ppn = 0.1 * ($total_belanja - $diskon);
                            $total_harga = ($total_belanja - $diskon) + $ppn;
                        }
                                           
                        ?>
                        <?php if ($harga != 0) : ?>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class='alert alert-success mt-3' role='alert'>
                                    <h4 class='alert-heading'>Detail Belanja</h4>
                                    <hr>
                                    <p>Nama Pelanggan : <?= $nama ?></p>
                                    <p>Produk Pilihan : <?= $produk ?></p>
                                    <p>Jumlah Beli : <?= $jumlah ?></p>
                                    <p>Total Belanja : <?= $total_belanja ?></p>
                                    <p>Diskon : <?= $diskon ?></p>
                                    <p>PPN : <?= $ppn ?></p>
                                    <p>Total Harga : <?= $total_harga ?></p>

                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>