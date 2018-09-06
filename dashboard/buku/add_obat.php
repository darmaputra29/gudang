<?php
include("header0.php");
?>
<div class="col-lg 13">
    <form action="?menu=input_obat" class="form-horizontal" method="post">
         
		 <div class="form-group">
            <label class="col-lg-3 control-label">Nama Obat :</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="nama">
            </div>
        </div>
		
		 <div class="form-group">
            <label class="col-lg-3 control-label">Jenis :</label>
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
            <label class="col-lg-3 control-label"> Kemasan:</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="kemasan">
            </div>
        </div>
         
         <div class="form-group">
            <label class="col-lg-3 control-label"> Taggal masuk:</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tgl_masuk_terakhir">
            </div>
        </div>
		
		<div class="form-group">	
            <label class="col-lg-3 control-label">Jumlah Masuk:</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="jumlah_masuk">
            </div>
        </div>
		
		<div class="form-group">	
            <label class="col-lg-3 control-label">Stok Awal:</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="stok">
            </div>
        </div>
		
		<div class="form-group">
            <label class="col-lg-3 control-label">Tanggal Expayer:</label>
            <div class="col-lg-5">
             <input class="form-control" type="date" name="tglexpayer">
            </div>
        </div>
		
		<div class="form-group">
            <label class="col-lg-3 control-label">Harga:</label>
            <div class="col-lg-5">
             <input class="form-control" type="text" name="harga">
            </div>
        </div>
		
		<br>
         
          <input type="submit" class="btn btn-default col-lg-1 col-lg-offset-3" value="Input">
    </form>
</div>