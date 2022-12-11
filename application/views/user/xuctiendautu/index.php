 	<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div>
            <div class="box-header">
              <h1 class="box-title" style="color: #08c;   font-size: 26px;    margin: 0 0 8px; text-align: center;">Tin tức cho xúc tiến đầu tư </h1>
            </div>
            <!-- /.box-header -->           
       <div>
           <div class="view view-taxonomy-term view-id-taxonomy_term view-display-id-page_2 teaser-list view-dom-id-d4557543c462b60b10c91dc4656138bc jquery-once-1-processed">
      
           <div class="row" id="intro" style="overflow: hidden; margin: 1.5em auto;">
                   <?php foreach($list as $row):?>
                   
                  <div id="box1" class="col" style=" float: left;  width: 50%;    margin-right: 2em;    margin-left: 15px;">
                    <div class="img"><a href="#" style="border: none;"><img typeof="foaf:Image" src="<?php echo $row->hinhanh?>" width="360" height="220"></a></div>
                      
                    <h2><a href="<?php echo base_url('user/xuctiendautu/detail/'.$row->id)?>"><?php echo $row->tieude ?></a></h2>
                   
                    <p>
                      <?php echo $row->mota?>
                    </p>
                  </div>
                  
              <?php endforeach; ?>
              
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