<?php
	ob_start();
	class login{
		function connect(){
			$con= mysql_connect("localhost","hao456c","123456");
			if(!$con){
				echo "không connect được db";
			}
			else
			{
				mysql_select_db("project");
				mysql_query("SET NAMES UTF8");
				return $con;
			}
		}
		function xuatchitietsanpham($id){
			$link=$this->connect();
			$sql="select * from product where tinhtrang=1 and ID='$id' limit 1";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i==1){
				while($row=mysql_fetch_array($ketqua))
			{	
				$tensp=$row['name'];	
				$gia=$row['gia'];		
				$hinh=$row['image'];
				echo"
				<div class=\"span5\">
					<div class=\"product-preview\">
					<div class=\"picture\">
					<img src=\"images/dummy/products/".$hinh."\" alt=\"\" width=\"940\" height=\"940\" id=\"mainPreviewImg\"/>
					</div>
					<div class=\"thumbs clearfix\">
					<div class=\"thumb active\">
					<a href=\"#mainPreviewImg\"><img src=\"images/dummy/products/".$hinh."\" alt=\"\" width=\"940\" height=\"940\"/></a>
					</div>
					</div>
					</div>
					</div>
 
 
 
					<div class=\"span7\">
					<div class=\"product-title\">
					<h1 class=\"name\"><span class=\"light\">".$tensp."</span></h1>
					<div class=\"meta\">
					<span class=\"tag\">$".$gia."</span>
					<span class=\"stock\">
					<span class=\"btn btn-success\">In Stock</span>
					<span class=\"btn btn-danger\">Out of Stock</span>
					<span class=\"btn btn-warning\">Ask for availability</span>
						</span>
						</div>
						</div>
						<div class=\"product-description\">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, tempor ut ultrices ferme ntum, aliquam consequat metus. In vel turpis dolorin dapibus dui. Aenean at auctor neque. Lorem ipsum dolor sit , consectetur elit. Fusce dolor tellus, tempor ut ultrices fermentum, aliquam consequat metus. In vel turpis dolor, in dapibus dui. Aenean at auctor neque.</p>
						<hr/>";
			}
			}
		}
		
		function xuatsanpham(){
		$link=$this->connect();
		$sql="select * from product where tinhtrang=1";
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
		{
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['ID'];	
				$tensp=$row['name'];	
				$gia=$row['gia'];		
				$hinh=$row['image'];	

					echo "
			<div class=\"span4\">
			<div class=\"product\">
			<div class=\"product-img featured\">
			<div class=\"picture\">
			<a href=\"product.php\"><img src=\"images/dummy/products/".$hinh."\" alt=\"\" width=\"518\" height=\"358\"/></a>
			<div class=\"img-overlay\">
			<a href=\"product.php?id=$id\" class=\"btn more btn-primary\" >More</a>
			<a href=\"?id=$id\" class=\"btn buy btn-danger\">Add to cart</a>
			</div>
			</div>
			</div>
			<div class=\"main-titles\">
			<h4 class=\"title\">$".$gia."</h4>
			<h5 class=\"no-margin\"><a href=\"product.php\">".$tensp."</a></h5>
			</div>
			<p class=\"desc\">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
			</div>
			</div>";
		}
		}
		}
		function addcart($id,$qty){
			session_start();
			$sql="select * from product where ID='$id' limit 1";
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i==1){
				$row=mysql_fetch_array($ketqua);
				if(isset($_SESSION['cart'][$id])){
				if($_SESSION['cart'][$id]['id']==NULL){
					$_SESSION['cart'][$id]['id']=$row["ID"];
					$_SESSION['cart'][$id]['qty']=0;
				}
				if($_SESSION['cart'][$id]['qty']+$qty<=$row["qty"]){
				 $_SESSION['cart'][$id]['qty']+=$qty;
				}
				}
				else{
				
				if($qty<=$row["qty"]){
				$_SESSION["cart"][$id]=array(
					'id'=>$row['ID'],
					'tensp'=>$row['name'],	
					'gia'=>$row['gia'],		
					'hinh'=>$row['image'],
					'qty'=>$qty
					);
				}
				}
			}
		}
		function checkconfirm($lastname,$firstname,$address,$phone){
			if($lastname!="" && $firstname!="" && $address!="" && $phone!=""){
				session_start();
				$_SESSION["namekh"]=$firstname." ".$lastname;
				$_SESSION["address"]=$address;
				$_SESSION["phone"]=$phone;
				header("location:../project3/checkout-step-4.php");
			}
			else{
				header("location:../project3/checkout-step-2.php");
			}
		}
		function xuatcart(){
			$subtotal=0;
			session_start();
			if(isset($_SESSION["cart"])){
				$cart=$_SESSION["cart"];
				foreach($cart as $key =>$value){
					if($value["id"]==NULL)continue;
					echo"
					<form action=\"index-2.php\" method=\"get\" class=\"form form-inline clearfix\">
					<div class=\"item-in-cart clearfix\">
						<div class=\"image\">
						<img src=\"images/dummy/products/".$value["hinh"]."\" width=\"124\" height=\"124\" alt=\"cart item\"/>
						</div>
						<div class=\"desc\">
						<strong><a href=\"product.php?id=".$value["id"]."\">".$value["tensp"]."</a></strong>
						<span class=\"light-clr qty\">
						Qty: ".$value["qty"]."
							&nbsp;
						<input type=\"hidden\" name=\"idrm\" value=\"".$value["id"]."\" />	
					<button type=\"submit\"  title=\"Remove Item\">X</button>
						</span>
						</div>
						<div class=\"price\">
						<strong>$".$value["gia"]."</strong>
						</div>
						</div>
						</form>";
					$subtotal+=$value["gia"]*$value["qty"];
				}
				$subtotal+=4.99;
				echo"
				<div class=\"summary\">
				<div class=\"line\">
				<div class=\"row-fluid\">
				<div class=\"span6\">Shipping:</div>
				<div class=\"span6 align-right\">$4.99</div>
				</div>
				</div>
				<div class=\"line\">
				<div class=\"row-fluid\">
				<div class=\"span6\">Subtotal:</div>
				<div class=\"span6 align-right size-16\">$".$subtotal."</div>
				</div>
				</div>
				</div>";
			}
		}
		function xuatcart2(){
			$subtotal=0;
			session_start();
			if(isset($_SESSION["cart"])){
				$cart=$_SESSION["cart"];
				foreach($cart as $key =>$value){
					if($value["id"]==NULL)continue;
			echo"
			<form action=\"checkout-step-1.php\" method=\"get\" class=\"form form-inline clearfix\">
			<tr>
			<td class=\"image\"><img src=\"images/dummy/products/".$value["hinh"]."\" alt=\"\" width=\"124\" height=\"124\"/></td>
			<td class=\"desc\">".$value["tensp"]." <button type=\"submit\"  title=\"Remove Item\">X</button></td>
				<td class=\"qty\">
				
				<input type=\"text\" name=\"quantity\" class=\"tiny-size\" value=\"".$value["qty"]."\"/>
				<input type=\"hidden\" name=\"id\" value=\"".$value["id"]."\" />
				<input type=\"hidden\" name=\"idrm\" value=\"".$value["id"]."\" />
				
				</td>
				<td class=\"price\">
				$".$value["gia"]."
				</td>
				</tr>
				</form>";
				$subtotal+=$value["gia"]*$value["qty"];
				}
			$subtotal+=4.99;
			echo "
				<tr>
				<td colspan=\"2\" rowspan=\"2\">
				</td>
				<td class=\"stronger\">Shipping:</td>
				<td class=\"stronger\"><div class=\"align-right\">$4.99</div></td>
				</tr>
				<tr>
				<td class=\"stronger\">Subtotal:</td>
				<td class=\"stronger\"><div class=\"size-16 align-right\">$".$subtotal."</div></td>
				</tr>
			";
			}
		}
		function xuatcart3(){
			$subtotal=0;
			session_start();
			if(isset($_SESSION["cart"])){
				$cart=$_SESSION["cart"];
				foreach($cart as $key =>$value){
					if($value["id"]==NULL)continue;
			echo"
			<tr>
			<td class=\"image\"><img src=\"images/dummy/products/".$value["hinh"]."\" alt=\"\" width=\"124\" height=\"124\"/></td>
			<td class=\"desc\">".$value["tensp"]."
				<td class=\"qty\">
				".$value["qty"]."
				</td>
				<td class=\"price\">
				$".$value["gia"]."
				</td>
				</tr>";
				$subtotal+=$value["gia"]*$value["qty"];
				}
			$subtotal+=4.99;
			echo "
				<tr>
				<td colspan=\"2\" rowspan=\"2\">
				</td>
				<td class=\"stronger\">Shipping:</td>
				<td class=\"stronger\"><div class=\"align-right\">$4.99</div></td>
				</tr>
				<tr>
				<td class=\"stronger\">Subtotal:</td>
				<td class=\"stronger\"><div class=\"size-16 align-right\">$".$subtotal."</div></td>
				</tr>
			";
			}
		}
		function addorder(){
			session_start();
			if(isset($_SESSION["namekh"]) && isset($_SESSION["address"]) && isset($_SESSION["phone"])){
				$cart=$_SESSION["cart"];
				$check=true;
			    foreach($cart as $key =>$value){
				if(isset($value["id"]))$check=false;
			    }
				if($check!=true){

					$today = date("Y-m-d");
					$subtotal=0;
					$id=$_SESSION["id"];
					$name=$_SESSION["namekh"];
					$address=$_SESSION["address"];
					$phone=$_SESSION["phone"];
					$link=$this->connect();
					$cart=$_SESSION["cart"];
					foreach($cart as $key =>$value){
					if($value["id"]==NULL)continue;
						$subtotal+=$value["gia"]*$value["qty"];
						
					}
					$subtotal+=4.99;
					$sql="INSERT INTO `project`.`order` (`ID_order` ,`ID_account` ,`address` ,`phone` ,`status` ,`day` ,`subtotal` ,`name`)
						VALUES (
						NULL , '$id', '$address', '$phone', 'chua xu ly','$today', '$subtotal', '$name'
					)";
                    $ketqua=mysql_query($sql,$link);
					$sql2="SELECT * FROM `order` ORDER BY `ID_order` DESC LIMIT 1";
					$ketqua2=mysql_query($sql2,$link);
					$row=mysql_fetch_array($ketqua2);
					$ido=$row['ID_order'];
					foreach($cart as $key =>$value){
					if($value["id"]==NULL)continue;
					$idsp=$value["id"];
					$tensp=$value["tensp"];
					$gia=$value["gia"];
					$qty=$value["qty"];
					$hinh=$value["hinh"];
					$sql3="INSERT INTO `project`.`order_detail` (`ID` ,`ID_order` ,`ID_product` ,`gia`,`image`,`qty`)
					VALUES (
					NULL , '$ido', '$idsp', '$gia', '$hinh','$qty'
					);";
						$ketqua3=mysql_query($sql3,$link);
					$sql4="UPDATE `product` SET `qty`= `qty` -$qty WHERE ID='$idsp'";
					$ketqua4=mysql_query($sql4,$link);	
					}
					unset($_SESSION["cart"]);
					unset($_SESSION["namekh"]);
					unset($_SESSION["address"]);
					unset($_SESSION["phone"]);
					header("location:../project3/index-2.php");
				}
				else header("location:../project3/index-2.php");
			}
			else header("location:../project3/checkout-step-2.php");
		}
		function checklogin($username,$pass){
			error_reporting(0);
			$pass=md5($pass);
			$sql="select ID,username,pass,quyen from login where username='$username' and pass='$pass' limit 1";
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			//echo $sql;
			if($i==1){
				while($row=mysql_fetch_array($ketqua)){
					$id=$row['ID'];
					$user=$row['username'];
					$pass=$row['pass'];
					$quyen=$row['quyen'];
					session_start();
					$_SESSION['id']=$id;
					$_SESSION['username']=$user;
					$_SESSION['password']=$pass;
					$_SESSION['quyen']=$row['quyen'];
					
					//echo "dang nhập thành công";
					//echo $_SESSION['username'];
					if($quyen==1)header("location:../project3/admin.php");
					else header("location:../project3/index-2.php");
				}
				return 1;
			}
		}
		
		function confirmlogin($name,$pass){
			$sql="select ID,username,pass,quyen from login where username='$name' and pass='$pass'";
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i==1){
				return 1;
			}
			else{
				header("location:../project3/index.php");
			}
		}
		
	}
?>