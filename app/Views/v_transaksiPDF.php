<h1>Data Pembelian</h1>

<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Foto</th>
    </tr>

    <?php
    $no = 1;
    foreach ($product as $index => $produk) :
        $path = "../public/img/" . $produk['foto'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

    ?>
        <tr>
            
            
            <td align="center"><?= $index + 1 ?></td>
            <td><?= $item['username'] ?></td>
            <td align="right"><?= "Rp " . number_format($item['total_harga'], 'IDR') ?></td>
            <td align="center"><?= $item['alamat'] ?></td>
            <td align="center"><?= $item['ongkir'] ?></td>
                      
        </tr>
    <?php endforeach; ?>
</table>
Downloaded on <?= date("Y-m-d H:i:s") ?>