<?php foreach ($value as $value) { ?>
<table class="table table-bordered text-center" >
    <thead >
      <tr >
        <th scope="col" colspan="7" style="background-color: #64b5f6 !important" > Kelas</th>
      </tr>
      <tr>
        <th scope="col"> 1</th>
        <th scope="col"> 2</th>
        <th scope="col"> 3</th>
        <th scope="col"> 4</th>
        <th scope="col"> 5</th>
        <th scope="col"> 6</th>
        <th scope="col"> Jumlah</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>  
      </tr>
    </tbody>
  </table>

  <table class="table table-bordered text-center" >
    <thead >
      <tr>
        <th scope="col" colspan="5" style="background-color: #64b5f6 !important"> Usia</th>
      </tr>
      <tr>
        <th scope="col"> Usia<7th</th>
        <th scope="col"> Usia7-12th</th>
        <th scope="col">  Usia>12th</th>
        <th scope="col"> Jumlah</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
     
        <td><?= $value->kurangdari7 ?></td>
        <td><?= $value->usia7sd12 ?></td>
        <td><?= $value->usiadiatas12 ?></td>
        <td><?= $value->tot ?></td>
      </tr>
    
    </tbody>
  </table>

  <table class="table table-bordered text-center" >
    <thead >
      <tr>
        <th scope="col" colspan="8" style="background-color: #64b5f6 !important">Agama</th>
      </tr>
      <tr>
        <th scope="col"> Islam</th>
        <th scope="col"> Kristen</th>
        <th scope="col">  Katolik</th>
        <th scope="col"> Hindu</th>  
        <th scope="col"> Budha</th>  
        <th scope="col"> Konghucu</th>  
        <th scope="col"> Lainnya</th>  
        <th scope="col"> Jumlah</th>       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $value->islam ?></td>
        <td><?= $value->kristen ?></td>
        <td><?= $value->katolik ?></td>
        <td><?= $value->hindu ?></td>
        <td><?= $value->budha ?></td>
        <td><?= $value->konghucu ?></td>
        <td><?= $value->agamalain ?></td>
        <td><?= $value->tot ?></td>
      </tr>
    </tbody>
  </table>

    <table class="table table-bordered text-center" >
    <thead >
      <tr>
        <th scope="col" colspan="10" style="background-color: #64b5f6 !important" >Mengulang</th>
      </tr>
      <tr>
        <th scope="col" colspan="7"> Berdasarkan Tingkat</th>
        <th scope="col" colspan="3"> Jenis Kelamin</th>   
      </tr>
      <tr>
        <th scope="col"> 1</th>
        <th scope="col"> 2</th>
        <th scope="col"> 3</th>
        <th scope="col"> 4</th>
        <th scope="col"> 5</th>
        <th scope="col"> 6</th>
        <th scope="col"> jml</th>
        <th scope="col"> L</th> 
        <th scope="col"> P</th>
        <th scope="col"> Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $value->mengulangkelas1 ?></td>
        <td><?= $value->mengulangkelas2 ?></td>
        <td><?= $value->mengulangkelas3 ?></td>
        <td><?= $value->mengulangkelas4 ?></td>
        <td><?= $value->mengulangkelas5 ?></td>
        <td><?= $value->mengulangkelas6 ?></td>
        <td><?= $value->tot ?></td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>

   <table class="table table-bordered text-center" >
    <thead >
      <tr>
        <th scope="col" colspan="10" style="background-color: #64b5f6 !important">Rombel</th>
      </tr>
      <tr>
        <th scope="col"> 1</th>
        <th scope="col"> 2</th>
        <th scope="col"> 3</th>
        <th scope="col"> 4</th>
        <th scope="col"> 5</th>
        <th scope="col"> 6</th>
        <th scope="col"> Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>

      </tr>
    </tbody>
  </table>

     <table class="table table-bordered text-center" >
    <thead >
      <tr>
        <th scope="col" colspan="10" style="background-color: #64b5f6 !important" >Siswa Lulus</th>
      </tr>
      <tr>
        <th scope="col" colspan="7"> Berdasarkan Tingkat</th>
        <th scope="col" colspan="3"> Jenis Kelamin</th>   
      </tr>
      <tr>
        <th scope="col"> 1</th>
        <th scope="col"> 2</th>
        <th scope="col"> 3</th>
        <th scope="col"> 4</th>
        <th scope="col"> 5</th>
        <th scope="col"> 6</th>
        <th scope="col"> Jumlah</th>
        <th scope="col"> L</th> 
        <th scope="col"> P</th>
        <th scope="col"> Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>

      </tr>
    </tbody>
  </table>

       <table class="table table-bordered text-center" >
    <thead >
      <tr>
        <th scope="col" colspan="10" style="background-color: #64b5f6 !important">Siswa Baru</th>
      </tr>
      <tr>
        <th scope="col" colspan="7"> Berdasarkan Tingkat</th>
        <th scope="col" colspan="3"> Jenis Kelamin</th>   
      </tr>
      <tr>
        <th scope="col"> 1</th>
        <th scope="col"> 2</th>
        <th scope="col"> 3</th>
        <th scope="col"> 4</th>
        <th scope="col"> 5</th>
        <th scope="col"> 6</th>
        <th scope="col"> Jumlah</th>
        <th scope="col"> L</th> 
        <th scope="col"> P</th>
        <th scope="col"> Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>

      </tr>
    </tbody>
  </table>
  <?php } ?>

<div class="btn-group btn-group-sm <?php
    if ($addclass != "") {
        echo $addclass;
    } else {
        echo '';
    }
    ?>" role="group" style="clear:both;margin:20px 0px;">
		<a href="<?= base_url('Sekolah/Data_Siswa/index'); ?>" class="btn btn-danger text-uppercase">kembali</a>
		<a href="<?= base_url('Sekolah/Data_Siswa/Cetak/' . $value->id_siswa . ' '); ?>" target="_new"
			class="btn btn-success text-uppercase">print</a>
	</div>
  
  <script>
    $('#example').DataTable({});
</script>