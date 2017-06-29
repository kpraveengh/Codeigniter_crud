<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CI CRUD</title>

</head>

<body>

<h2> Simple CI CRUD Application </h2>
<?php 
if($this->session->flashdata('msg')){
	?>
	<h2><?php echo $this->session->flashdata('msg');?></h2>
	
	<?php
	
}
	?>

<table width="600" border="1" cellpadding="5">

<tr>

<th scope="col">Id</th>

<th scope="col">User Name</th>

<th scope="col">Email</th>

<th scope="col">Mobile</th>

<th scope="col">Address</th>
<th scope="col">Action</th>

</tr>

<?php foreach ($user_list as $u_key){ ?>

<tr>

<td><?php echo $u_key->id; ?></td>

<td><?php echo $u_key->name; ?></td>

<td><?php echo $u_key->email; ?></td>

<td><?php echo $u_key->address; ?></td>

<td width="40" align="left" ><a href="<?php echo base_url();?>index.php/users/edit/<?php echo $u_key->id; ?>">Edit</a></td>

<td width="40" align="left" ><a href="<?php echo base_url();?>index.php/users/deleteuser/<?php echo $u_key->id; ?>">Delete</td>

</tr>


<?php }?>
<tr>

<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/users/add">Insert New User</a></td>

</tr>

</table>

</body>


</html>
