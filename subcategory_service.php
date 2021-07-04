<?php
    include_once("conn.php");
    $cat_id=$_POST["cat_id"];
    echo $cat_id;
    $result = mysql_query("select * from sub_category where cat_id=$cat_id");
    $row = mysql_fetch_row($result);
    while($row)
    {
?>
        <option value="<?php echo $row[1]; ?>"><?php echo $row[2]; ?></option>
<?php 
        $row = mysql_fetch_row($result);
    }
?>