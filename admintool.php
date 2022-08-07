<?php
ob_start();
	class admin{
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
		function xuatdonhang(){
			$link=$this->connect();
			$sql="SELECT * FROM `order` WHERE 1";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['ID_order'];	
				$tenkh=$row['name'];	
				$subtotal=$row['subtotal'];		
				$account=$row['ID_account'];
				$address=$row['address'];
				$date=$row['day'];
				$phone=$row['phone'];
				$status=$row['status'];
			echo"
			<tr>
			<td class=\"desc\">".$id."</td>
			<td class=\"desc\">".$account."</td>
			<td class=\"desc\">".$tenkh."</td>
			<td class=\"desc\">".$address."</td>
			<td class=\"desc\">".$phone."</td>
			<td class=\"desc\">".$date."</td>
			<td class=\"desc\">".$subtotal."</td>
			<td class=\"desc\">".$status."</td>
			<td>
			<a href=\"orderdetail.php?id=".$id."\" class=\"btn btn-default btn-flat\">xem chi tiết</a>";
			if($status=="chua xu ly" || $status=="dang xu ly"){
			echo "<a href=\"orderupdate.php?id=".$id."\" class=\"btn btn-default btn-flat\">Cập Nhật Tình Trạng</a>";
			}
			echo "
			</td>
				</tr>";
				}
			}
		}
		function xuatdonhangupdate($id){
			$link=$this->connect();
			$sql="SELECT * FROM `order` WHERE ID_order='$id' Limit 1";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i==1)
			{
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['ID_order'];	
				$tenkh=$row['name'];	
				$subtotal=$row['subtotal'];		
				$account=$row['ID_account'];
				$address=$row['address'];
				$date=$row['day'];
				$phone=$row['phone'];
				$status=$row['status'];
			echo"
			<form method=\"post\" action=\"#\">
			<tr>
			<td class=\"desc\">".$id."</td>
			<td class=\"desc\">".$account."</td>
			<td class=\"desc\">".$tenkh."</td>
			<td class=\"desc\">".$address."</td>
			<td class=\"desc\">".$phone."</td>
			<td class=\"desc\">".$date."</td>
			<td class=\"desc\">".$subtotal."</td>
			<td class=\"desc\">".$status."</td>
			<td>
			";
				}
			}
		}
		function update($id,$status){
			$link=$this->connect();
			$sql="UPDATE `order` SET `status` = '$status' WHERE ID_order='$id' LIMIT 1";
			$ketqua=mysql_query($sql,$link);
			header("location:../project3/order.php");
		}
		function chitietsanpham($id){
			$link=$this->connect();
			$sql="select * from product where tinhtrang=1 and ID='$id' limit 1";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i==1){
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row['ID'];	
				$tensp=$row['name'];	
				$gia=$row['gia'];		
				$hinh=$row['image'];
				$qty=$row['qty'];
			echo"
			<form method=\"post\" action=\"#\" enctype=\"multipart/form-data\">
			<tr>
			<td class=\"image\"><img src=\"images/dummy/products/".$hinh."\" alt=\"\" width=\"124\" height=\"124\"/><br>
			<input type=\"file\" name=\"filename\" id=\"filename\"></td>
			<td class=\"desc\"><input type=\"text\" id=\"tensp\" name=\"tensp\" class=\"span4\" value=\"".$tensp."\" required></td>
			<td class=\"qty\"><input type=\"number\" id=\"qty\" name=\"qty\" class=\"span4\" value=\"".$qty."\" required></td>
			<td class=\"price\"><input type=\"number\" id=\"gia\" name=\"gia\" class=\"span4\" value=\"".$gia."\" required></td>
			<td>
			";
				}
			}
		}
		function xuatchitietdonhang($id){
			$link=$this->connect();
			$sql="SELECT * FROM `order_detail` WHERE ID_order='$id'";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
		{
			while($row=mysql_fetch_array($ketqua))
			{
				$idsp=$row['ID_product'];	
				$gia=$row['gia'];		
				$hinh=$row['image'];
				$qty=$row['qty'];
				$subtotal=$qty*$gia;
			echo"
			<tr>
			<td class=\"image\"><img src=\"images/dummy/products/".$hinh."\" alt=\"\" width=\"124\" height=\"124\"/></td>
			<td class=\"desc\">".$idsp."</td>
			<td class=\"price\">$".$gia."</td>
			<td class=\"qty\">".$qty."</td>
			<td class=\"desc\">$".$subtotal."</td>
				</tr>";
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
				$qty=$row['qty'];
			echo"
			<tr>
			<td class=\"image\"><img src=\"images/dummy/products/".$hinh."\" alt=\"\" width=\"124\" height=\"124\"/></td>
			<td class=\"desc\">".$tensp."</td>
			<td class=\"qty\">".$qty."</td>
			<td class=\"price\">$".$gia."</td>
			<td>
			<a href=\"editadmin.php?id=".$id."\" class=\"btn btn-default btn-flat\">Sửa</a>
			<a href=\"admin.php?id=".$id."\" class=\"btn btn-default btn-flat\">Xóa</a>
			</td>
				</tr>";
				}
			}
		}
		function xoasanpham($id){
			$link=$this->connect();
			$sql="UPDATE `product` SET `tinhtrang` = '0' WHERE ID='$id' LIMIT 1";
			$ketqua=mysql_query($sql,$link);
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
		function edit($id,$namef,$tensp,$qty,$gia){
			$link=$this->connect();
			if($namef!="")
			$sql="UPDATE `product` SET `name` = '$tensp',`image` = '$namef',`qty` = '$qty',`gia` = '$gia'  WHERE ID='$id' LIMIT 1";
			else
			$sql="UPDATE `product` SET `name` = '$tensp',`qty` = '$qty',`gia` = '$gia'  WHERE ID='$id' LIMIT 1";
			$ketqua=mysql_query($sql,$link);
			header("location:../project3/admin.php");
		}
		function add($id,$namef,$tensp,$qty,$gia){
			$link=$this->connect();
			$sql="INSERT INTO `project`.`product` (`ID` ,`name` ,`gia` ,`qty` ,`image` ,`tinhtrang`)
					VALUES (NULL , '$tensp', '$gia', '$qty', '$namef', '1')";
			$ketqua=mysql_query($sql,$link);
			header("location:../project3/admin.php");
		}
	}
?>