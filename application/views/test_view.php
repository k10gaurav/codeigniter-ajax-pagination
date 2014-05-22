<?php echo form_open('dropdown/validate_select')?>
	

	<select name='selCountry' id='selCountry'>
		<option value='0'>Select</option>
		<option value='england'>England</option>
		<option value='australia'>Australia</option>
		<option value='india'>India</option>
	</select>
	

<input type="submit"/>

<?php echo form_close();?>
<?php
if(validation_errors())
{
	echo validation_errors();
}
?>