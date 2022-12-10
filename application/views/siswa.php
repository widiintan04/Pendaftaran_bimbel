<div class="col-md-offset-2 col-md-8">
    <br>
    <br>
                
                
                    <div class="row">
                            <h2>Pengumuman Hasil Pendaftaran Bimbingan Belajar  </h2> 
<br><br><br>                            
                                <table class='table table-striped'>                 
                                    <thead>                     
                                        <tr>                         
                                            <th>No</th>
                                            <th>Nama</th>                         
                                            <th>No telphone</th>
                                            <th>Alamat</th>                        
                                            <th></th>                    
                                        </tr>                 
                                    </thead>    
                                    <?php
                                    $no = 1;
                                    foreach ($siswa as $ssw): ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $ssw->nama ?></td>
                                                <td><?= $ssw->no_telp ?></td>
                                                <td><?= $ssw->alamat ?></td>
                                                
                                            </tr>
                                        </tbody>
                                        <?php endforeach;
                                    ?>  