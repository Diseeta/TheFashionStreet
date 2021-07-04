<div class="categories">
	<h3>Categories</h3>
	<ul class="tree-list-pad">
	
	<?php 
			$result = mysql_query("select * from category");
			$row = mysql_fetch_row($result);
			
			while($row)
			{
			
	?>
	
		<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span><?php echo $row[1]; ?> </span></a></label>
			<ul>
			
			<?php 
					
				$result1 = mysql_query("select * from sub_category where cat_id=$row[0]");
				$row1 = mysql_fetch_row($result1);
				
				while($row1)
				{
				
			?>
					<li><input type="checkbox" id="item-0-0" /><a href="productss.php?cid=<?php echo $row[0]; ?>&sid=<?php echo $row1[0]; ?>" ><?php echo $row1[2]; ?> </a></li>	
			<?php 
			
					$row1 = mysql_fetch_row($result1);
					}
			?>
				
			</ul>
		</li>
		<?php
			$row = mysql_fetch_row($result);
				}
		?>
	</ul>
</div>