<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        
        <div class="col-md-12" id="list">
            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">List Dokumen</h3>
                </div><!-- /.box-header -->
                <div class="box-body" >
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Tanggal Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($list)) {
                            	$i=1;
                            	foreach($list as $judul) {
                             ?>
                                <tr>
                                    <td><a href="" target="_blank"><?php echo $i; ?></a>
                                    </td>
                                    <td><?php echo $judul['title'];//echo $judul;?></td>
                                    <td><?php echo $judul['status']; ?></td>
 									<td><span class="label label-success"><?php echo $judul['tglselesai']; ?></span></td>
                                    <td>
                                    <a href="">EDIT</a> |
                                    <a href="">DELETE</a>
                                    </td>
                                </tr>
                           <?php  $i+=1;}}else{?>
                           <style>
                           #list{
                           visibility: hidden;
                       }
                           </style>
                           <?php }?> 
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="#" class="btn btn-sm btn-info btn-flat pull-left">Add new dokumen</a>
                    <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
    </div><!-- /.row (main row) -->

</section><!-- /.content -->