 	<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-solid box-info">
            <div class="box-header">
              <h3 class="box-title">Việc làm tại Nhật Bản</h3>
            </div>
            <!-- /.box-header -->           
       
            <div>	
        		<div class="list-group list-search-result-group tlp headline">
        		      <?php foreach ($list as $row):?>
            		      <?php if (str_word_count($row->address) == 1) { ?>
                    		          <div class="list-group-item">
                    		   <p class="ribbon ribbon-danger">NEW</p>
                    		   <h2 class="list-group-item-heading">
                    		        <a target="_blank" href="<?php echo base_url('user/news/detail/'.$row->id)?>"><?php echo $row->nameNews?></a>
                    		   </h2>
                    		   
                    		   <div class="list-group-item-text clearfix">
                    		      <p class="priority-data">
                    		         <a class="text-accent" href="#"><?php echo $row->infoCPN?></a>
                    		         -
                    		         <a href="#" title="View Jobs at Location: Hà Nội"><?php echo $row->address?></a>                                                                            
                    		      </p>
                    		      <div class="pull-left">
                    		         <small>
                    		       <?php echo $row->salary?>
                    		         |                                                     Nhân viên                                                
                    		         </small>
                    		      </div>
                    		      <p class="date pull-right"><small><?php echo $row->receipt?></small></p>
                    		   		</div>
                    			</div>
                    		<?php } ?>
            			
        			<?php endforeach;?>   
            			
            	</div>
            </div>
       

            <!-- /.box-body -->
			

          </div>
          <!-- /.box -->	

		 </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->