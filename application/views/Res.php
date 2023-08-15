<select  class="form-control" name="sub_category_id" required>
	<?php
	foreach($result as $row)
	{
		?>
<option value="<?=$row->id?>"><?=$row->sub_category_name?></option>
<?php
	}
?>
</select>
