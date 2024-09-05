<?php
include('connect_session.php');

class connections
{




public function Medicine()
{


 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='10'");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}


}



public function SurgicalItems()
{


 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='20'");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}


}


public function medicated()
{


 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='30'");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}


}


public function herbal()
{


 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='40'");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}


}


public function general()
{


 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='50'");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}


}



public function AddHerbal()
{
if(isset($_POST['submit']))
{



    $product_name=$_POST['product_name'];
    $company_name=$_POST['company_name'];
	  $batch_number=$_POST['batch_number'];
    $formula=$_POST['formula'];
	  $quantity=$_POST['quantity'];
    $Power=$_POST['power'];
	  $manufacture_date=$_POST['manufacture_date'];
    $expiry_date=$_POST['expiry_date'];
	  $unit_price=$_POST['unit_price'];
	  echo $product_name;
	
	
 mysql_query("INSERT INTO `items_type`(`item_tp_id`, `item_tp_desc`, `company_name`, `name`, `batch_no`, `manufacturer_date`, `expiry_date`, `formula`, `power`, `quantity`, `unit_price`)
 VALUES ('40','HERBAL','$company_name','$product_name','$batch_number','$manufacture_date','$expiry_date','$formula','$Power','$quantity','$unit_price')");

echo "succefully enter";


}

else
{
echo "error";
}										
										
										
										
										
										
										




}



public function AddMedicated()
{


										
										
										if(isset($_POST['submit']))
{

include('connect_session.php');

    $product_name=$_POST['product_name'];
    $company_name=$_POST['company_name'];
	  $batch_number=$_POST['batch_number'];
    $formula=$_POST['formula'];
	  $quantity=$_POST['quantity'];
    $Power=$_POST['power'];
	  $manufacture_date=$_POST['manufacture_date'];
    $expiry_date=$_POST['expiry_date'];
	  $unit_price=$_POST['unit_price'];
	  echo $product_name;
	
	
	
	
	
	
	
 mysql_query("INSERT INTO `items_type`(`item_tp_id`, `item_tp_desc`, `company_name`, `name`, `batch_no`, `manufacturer_date`, `expiry_date`, `formula`, `power`, `quantity`, `unit_price`)
 VALUES ('30','MEDICATED','$company_name','$product_name','$batch_number','$manufacture_date','$expiry_date','$formula','$Power','$quantity','$unit_price')");

echo "succefully enter";


}

else
{
echo "error";
}										
										
										
										
										
										
										
										

}

public function AddMedicines()
{


										if(isset($_POST['submit']))
{

include('connect_session.php');

    $product_name=$_POST['product_name'];
    $company_name=$_POST['company_name'];
	  $batch_number=$_POST['batch_number'];
    $formula=$_POST['formula'];
	  $quantity=$_POST['quantity'];
    $Power=$_POST['power'];
	  $manufacture_date=$_POST['manufacture_date'];
    $expiry_date=$_POST['expiry_date'];
	  $unit_price=$_POST['unit_price'];
	  echo $product_name;
	
	
 mysql_query("INSERT INTO `items_type`(`item_tp_id`, `item_tp_desc`, `company_name`, `name`, `batch_no`, `manufacturer_date`, `expiry_date`, `formula`, `power`, `quantity`, `unit_price`)
 VALUES ('10','MEDICINES','$company_name','$product_name','$batch_number','$manufacture_date','$expiry_date','$formula','$Power','$quantity','$unit_price')");

echo "succefully enter";


}
else
echo "error";
										
										
										
										

}


public function AddSegical()
{


										
										if(isset($_POST['submit']))
{

include('connect_session.php');

    $product_name=$_POST['product_name'];
    $company_name=$_POST['company_name'];
	  $batch_number=$_POST['batch_number'];
    $formula=$_POST['formula'];
	  $quantity=$_POST['quantity'];
    $Power=$_POST['power'];
	  $manufacture_date=$_POST['manufacture_date'];
    $expiry_date=$_POST['expiry_date'];
	  $unit_price=$_POST['unit_price'];
	  echo $product_name;
	
	
 mysql_query("INSERT INTO `items_type`(`item_tp_id`, `item_tp_desc`, `company_name`, `name`, `batch_no`, `manufacturer_date`, `expiry_date`, `formula`, `power`, `quantity`, `unit_price`)
 VALUES ('20','SERGICAL','$company_name','$product_name','$batch_number','$manufacture_date','$expiry_date','$formula','$Power','$quantity','$unit_price')");

echo "succefully enter";


}

else
{
echo "error";
}										
										
										
										
										
										
										
										

}


public function OrderMedicine()
{



 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='10' and quantity<5");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}



}


public function Orderherbal()
{


 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='40' and quantity<5");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}


}


public function Ordermedicated()
{


 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='30' and quantity<5");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}


}

public function OrderSurgicalItems()
{


 $fetch=mysql_query("SELECT * FROM `items_type` where item_tp_id='20' and quantity<5");

	$count=mysql_num_rows($fetch);
    if($count!="")
    {
  echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>ID</th>
                                            <th>Company</th>
											<th>Item Name</th>
                                            <th>Batch No.</th>
                                            <th>Manufacture Date</th>
											<th>Expiry Date</th>
                                            <th>Formula</th>
                                            <th>Power</th>
											<th>Quantity</th>
                                            <th>Unit Price</th>
                                            
                                            
                                        </tr>
                                    </thead>";
    // output data of each row
    while($row = mysql_fetch_array($fetch)) 
	{
	echo "<tbody>";
        echo "<tr class='gradeA'>";
echo "<td>" . $row['item_tp_desc'] . "</td>";
echo "<td>" . $row['item_id'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['batch_no'] . "</td>";
echo "<td>" . $row['manufacturer_date'] . "</td>";
echo "<td>" . $row['expiry_date'] . "</td>";
echo "<td>" . $row['formula'] . "</td>";
echo "<td>" . $row['power'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['unit_price'] . "</td>";
echo "</tr>";

    }
	echo "</tbody>";
	echo "</table>";
	}


}


}



?>