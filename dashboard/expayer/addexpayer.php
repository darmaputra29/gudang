<?php
include("headerexpayer.php");
require("../fungsi/config.php");
include("koneksi.php");
?>
<div class="col-lg 13">
    <form action="?menu=inputexpayer" class="form-horizontal" method="post">	
		
		 <div class="form-group">
            <label class="col-lg-3 control-label">Nama Obat :</label>
            <div class="col-lg-5">
             <select name="id" class="form-control">
                <option> Nama Obat</option>
                <?php getDataNama();?>
             </select>
            </div>
        </div>
		
		<div class="form-group">
            <label class="col-lg-3 control-label"> Tanggal Masuk:</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tgl_masuk">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-3 control-label"> Taggal Expayer:</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tgl_expayer">
            </div>
        </div>
		
		<br>
         
          <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Input">
    </form>
</div>