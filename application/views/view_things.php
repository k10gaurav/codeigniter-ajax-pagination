<!-- Ajax Pagination by Kumar Gaurav-->
<style>
	p.things_pagination a{padding:5px;margin:2px;background:#000000;color:#ffffff}
	p.things_pagination strong{padding:5px;margin:2px;background:#d0d0d0}
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
	{
		$(document).delegate('p.things_pagination a','click',function(){
		var this_url=$(this).attr('href');
		$.post(this_url,{},function(data)
			{
				if(data!='')
				{
					$("div#things_table").html(data);
				}
				else
				{
					$("div#things_table").html('Loading...');
				}
			});
			return false;
		});
	}
);
</script>
<div id="things_table">
	<?php echo $this->load->view('view_things_table'); ?>
</div>