
<script type="text/javascript" src="js/jquery.ajax-cross-origin.min.js"></script>

<script type="text/javascript">
    $(function() {
        paginate();
        function paginate() {
            $('#ajax_links a').click(function() {
                var url = $(this).attr('href');
                $.ajax({
                    url: url,
                    crossOrigin: true,
                    type: 'POST',
                    headers: {
                          "Access-Control-Allow-Origin":*,
                          "Origin":"https://vietseiko.com"
                        },
                    dataType: "json",
                    crossDomain: true,
                    format: "json",
                    data: 'ajax=true',
                    success: function(data) {
                        $('#ajax_content').html(data);
                    }
                });
                return false;
            });
        }
    });
</script>
<div >
    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th>Việc làm</th>
            <th>Mức lương</th>
            <th>Khu vực</th>
            <th>Ngày hết hạn</th>
            </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < count($jobs_VN); ++$i) { ?>
        <tr>
            <td><a target="_blank" style="font-size: 15px;" href="<?php echo 'https://www.vietseiko.com/user/news/detail/'.$jobs_VN[$i]->id?>">  <?php echo $jobs_VN[$i]->nameNews?></a></td>        
            <td><?php echo $jobs_VN[$i]->salary; ?></td>
            <td><?php echo $jobs_VN[$i]->address; ?></td>
            <td><?php echo $jobs_VN[$i]->receipt; ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>

    <div id="ajax_links" class="pagination" style="display: flex;width: 23em; margin-top: 7%; border-bottom: none;" >
        <?php echo $links_VN; ?>
    </div>
</div>