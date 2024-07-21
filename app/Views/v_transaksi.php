<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<a type="button" class="btn btn-success" href="<?=base_url() ?>produk/download">
    Download Data
</a>
<hr>
<div class="table-responsive">
    <!-- Table with stripped rows -->
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Alamat</th>
                <th scope="col">Ongkir</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($buy)) :
                foreach ($buy as $index => $item) :
            ?>
                    <tr>
                        <th scope="row"><?php echo $index + 1 ?></th>
                        
                        <td><?php echo $item['username'] ?></td>
                        <td><?php echo number_to_currency($item['total_harga'], 'IDR') ?></td>
                        <td><?php echo $item['alamat'] ?></td>
                        <td><?php echo $item['ongkir'] ?></td>
                        <td><?php echo ($item['status'] == "1") ? "1" : "0" ?></td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal-<?= $item['status'] ?>">
                                Ubah Status
                            </button>
                        </td>
                    </tr>
                    
                   
            <?php
                endforeach;
            endif;
            ?>
        </tbody>
    </table>
    <!-- End Table with stripped rows -->
</div>
<?= $this->endSection() ?>