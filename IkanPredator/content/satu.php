<?php
require 'function.php';
$koleksi = query("SELECT * FROM product_edit");

if (isset($_POST["cari"])) {
    $koleksi=berburu($_POST["keyword"]);
 }
?>
<div class="product-status-wrap">
	<h4>Fish Stock Today <img class="main-logo" src="img/logo/list.png" alt="" />
	<!-- <style>
			input[type=text] {
			width: 130px;
			-webkit-transition: width 0.4s ease-in-out;
			transition: width 0.4s ease-in-out;
			}

			/* When the input field gets focus, change its width to 100% */
			input[type=text]:focus {
			width: 100%;
			}
	</style> -->
	</h4>
        <div class="add-product">
            <a href="index2.php?isi=add-product">Add Product</a>
        </div>
		<!--<form  action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="cari masalah??" autocomplete="off">
        <button type="submit" name="cari" >cari </button>
    	</form>	-->	
            <table id='example' class="table">
			<thead>
				<tr>
                <th>Nama</th>
                <th>Jenis</th>
				<th>Harga/Ekor</th>
				<th>Jumlah</th>
                <th>Ukuran</th>
				<th>Diskon</th>
				<th>Image</th>
				<th>Opsi</th>
		</tr>  
			</thead>
			<tbody>
			<?php //$i = 1; ?>
					<?php
					//foreach ($koleksi as $r) :
					
					include "koneksi.php";
					$tampilkan = mysqli_query($koneksi,"SELECT * FROM product_edit");
					while($r = mysqli_fetch_array($tampilkan)){
					
					?>
	
                     	  <tr>
                            <td><?php echo $r['id_barang']?></td>
                            <td><?php echo $r['warna_barang']?></td>
							<td><?php echo $r['harga']?></td>
							<td><?php echo $r['jumlah']?></td>
							<td><?php echo $r['ukuran']?></td>
							<td><?php echo $r['diskon']?></td>
							<td><img src="img/<?php echo $r['gambar'];?>" height="50"></td>
                           <td>
								<a href="index2.php?isi=edit-product&id=<?php echo $r['id_barang'];?>"data-toogle="tooltip"class="btn btn-warning"><i class="fa fa-pencil"></i></a>
								<a href='delete.php?id=<?php echo $r['id_barang'];?>' onclick="return confirm('apakah anda akan menghapus data ?')"class="btn btn-danger"><i class="fa fa-trash"></i></td>
					<?php }//$i++; ?>
            <?php //endforeach; ?>
							</td>
                        </tr>
			</tbody>								
				</table>
</div>