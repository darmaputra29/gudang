<?php
include("header0.php");
?>
<div class="col-lg 12">
    <form action="?menu=input_buku" class="form-horizontal" method="post">
         
		 <div class="form-group">
            <label class="col-lg-2 control-label">Nama Obat :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="id">
            </div>
        </div>
		
		 <div class="form-group">
            <label class="col-lg-2 control-label">Jenis :</label>
            <div class="col-lg-5">
             <select class="form-control" name="jenis">
                <option> Pilih Jenis </option>
                <option value="Tablet">Tablet</option>
                <option value="Injeksi">Injeksi</option>
                <option value="Sirup">Sirup</option>
                <option value="Salap">Salap</option>
                <option value="Infus">Infus</option>
                <option value="BHP">BHP</option>
             </select>   
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label">Stok :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="pengarang">
            </div>
        </div>
		
		  <div class="form-group">
            <label class="col-lg-2 control-label">Satuan Kemasan :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="penerbit">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-2 control-label"> Taggal masuk terakhir:</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="th_terbit">
            </div>
        </div>
		
		
         
         <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Input">
    </form>
</div>