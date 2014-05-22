<!-- Ajax Pagination by Kumar Gaurav-->
	<table cellspacing=2 cellpadding=5> 
		<tr>
			<td>Id</td><td>Name</td><td>Description</td>
		</tr>
		<?php
			foreach($things as $thing)
			{
		?>
		<tr>
			<td><?php echo $thing->id ?></td>
			<td><?php echo $thing->name ?></td>
			<td><?php echo $thing->description ?></td>
		</tr>
		<?php
			}
		?>
	</table>
	<p>
	<?php echo $this->pagination->create_links(); ?>
	</p>
