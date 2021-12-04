$cat=$_GET['cat']; // This line is added to take care if your global variable is off
if(strlen($cat) > 0 and !is_numeric($cat)){ // to check if $cat is numeric data or not.
echo "Data Error";
exit;
}
///////// Getting the data from Mysql table for first list box//////////
$query2="SELECT DISTINCT category,cat_id FROM category order by category";
///////////// End of query for first list box////////////
echo "<form method=post name=f1 action='dd-check.php'>";
//////////        Starting of first drop downlist /////////
echo "<select name='cat' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
if($stmt = $connection->query("$query2")){
	while ($row2 = $stmt->fetch_assoc()) {
	if($row2['cat_id']==@$cat){echo "<option selected value='$row2[cat_id]'>$row2[category]</option>";}
else{echo  "<option value='$row2[cat_id]'>$row2[category]</option>";}
  }
}else{
echo $connection->error;
}
echo "</select>";
//////////////////  This will end the first drop down list ///////////
////////////////// Second drop downl list //////////
echo "<select name='subcat'><option value=''>Select one</option>";
if(isset($cat) and strlen($cat) > 0){
if($stmt = $connection->prepare("SELECT DISTINCT subcategory FROM subcategory where cat_id=? order by subcategory")){
$stmt->bind_param('i',$cat);
$stmt->execute();
 $result = $stmt->get_result();
 while ($row1 = $result->fetch_assoc()) {
  echo  "<option value='$row1[subcategory]'>$row1[subcategory]</option>";
	}

}else{
 echo $connection->error;
}

/////////
}else{
///////
$query="SELECT DISTINCT subcategory FROM subcategory order by subcategory";

if($stmt = $connection->query("$query")){
	while ($row1 = $stmt->fetch_assoc()) {

echo  "<option value='$row1[subcategory]'>$row1[subcategory]</option>";

  }
}else{
echo $connection->error;
}

}
////////// end of query for second subcategory drop down list box ///////////////////////////
echo "</select>";
//////////////////  This will end the second drop down list ///////////

echo "<input type=submit value='Submit'></form>";
