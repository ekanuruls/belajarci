<h3><?php echo $mahasiswa;?></h3>
<ul>
        <?php
            foreach($daftar_mahasiswa as $k => $v) {
        ?>
        <li>No.<?php echo $k+1;?> <?php echo $v;?></li>

                <?php } ?>
</ul>

<a href="<?php echo base_url("Mahasiswa/add"); ?>">ADD</a>



            

