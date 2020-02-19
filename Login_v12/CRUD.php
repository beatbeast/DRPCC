<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        /* required style*/ 
.none{display: none;}

/* optional styles */
table tr th, table tr td{font-size: 1.2rem;}
.row{ margin:20px 20px 20px 20px;width: 100%;}
.glyphicon{font-size: 20px;}
.glyphicon-plus{float: right;}
a.glyphicon{text-decoration: none;}
a.glyphicon-trash{margin-left: 10px;}
    </style>
</head>
<body>



<div class="container">
    <div class="row">
        <div class="panel panel-default users-content">
            <div class="panel-heading">Users <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add User</h2>
                <form class="form" id="userForm">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="useraction('add')">Add User</a>
                </form>
            </div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit User</h2>
                <form class="form" id="userForm">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstnameEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastnameEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="emailEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phonenumber" id="phoneEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <input type="text" class="form-control" name="message" id="messageEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="useraction('edit')">Update User</a>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="userData">
                    <?php
                        include 'db.php';
                        $db = new DB();
                        $users = $db->getRows('users',array('order_by'=>'id DESC'));
                        if(!empty($users)): $count = 0; foreach($users as $user): $count++;
                    ?>
                    <tr>
                        <td><?php echo '#'.$count; ?></td>
                        <td><?php echo $user['firstname']; ?></td>
                        <td><?php echo $user['lastname']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phonenumber']; ?></td>
                        <td><?php echo $user['message']; ?></td>
                        <td>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editUser('<?php echo $user['id']; ?>')"></a>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?')?useraction('delete','<?php echo $user['id']; ?>'):false;"></a>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr><td colspan="5">No user(s) found......</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function getUsers(){
    $.ajax({
        type: 'POST',
        url: 'userAction.php',
        data: 'action_type=view&'+$("#userForm").serialize(),
        success:function(html){
            $('#userData').html(html);
        }
    });
}
function userAction(type,id){
    id = (typeof id == "undefined")?'':id;
    var statusArr = {add:"added",edit:"updated",delete:"deleted"};
    var userData = '';
    if (type == 'add') {
        userData = $("#addForm").find('.form').serialize()+'&action_type='+type+'&id='+id;
    }else if (type == 'edit'){
        userData = $("#editForm").find('.form').serialize()+'&action_type='+type;
    }else{
        userData = 'action_type='+type+'&id='+id;
    }
    $.ajax({
        type: 'POST',
        url: 'userAction.php',
        data: userData,
        success:function(msg){
            if(msg == 'ok'){
                alert('User data has been '+statusArr[type]+' successfully.');
                getUsers();
                $('.form')[0].reset();
                $('.formData').slideUp();
            }else{
                alert('Some problem occurred, please try again.');
            }
        }
    });
}
function editUser(id){
    $.ajax({
        type: 'POST',
        dataType:'JSON',
        url: 'userAction.php',
        data: 'action_type=data&id='+id,
        success:function(data){
            $('#idEdit').val(data.id);
            $('#nameEdit').val(data.name);
            $('#emailEdit').val(data.email);
            $('#phoneEdit').val(data.phone);
            $('#editForm').slideDown();
        }
    });
}
</script>

</body>
</html>










<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------->


<!--View Page-->

<?php
include("conn.php");
?>
<!--
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="icon" href="images/logo1.jpg">
</head>
<body>
<div class="form">
<p><a href="adminpage.php">Home</a> 
| <a href="add.php">Insert New Record</a> 
| <a href="log-out.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>First Name</strong></th>
<th><strong>Last Name</strong></th>
<th><strong>E-mail</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>MEssage</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
//$count=1;
//$sel_query="Select * from requests ORDER BY id;";
//$result = mysqli_query($conn,$sel_query);
//while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php //echo $count; ?></td>
<td align="center"><?php //echo $row["firstname"]; ?></td>
<td align="center"><?php //echo $row["lastname"]; ?></td>
<td align="center"><?php //echo $row["email"]; ?></td>
<td align="center"><?php //echo $row["phonenumber"]; ?></td>
<td align="center"><?php //echo $row["message"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php //echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php //echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php //$count++; } ?>
</tbody>
</table>
</div>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="icon" href="images/logo1.jpg">
</head>
<body>

    <header class="border" style="background-color:gray">
        <img src="images/logo1.jpg" class="img border" alt="logo" width="55" >
    </header><br><br/> 
    <div class="row">
          <div class="col-lg-2 text-center" style="background-color:#eee;">
                <br><br/>
                
                <h2>Dashboard</h2>
                <br></br>
                <?php echo "<strong>Details For: $firstname</strong>" ?>
                
                <br><br/>
                <form>
                  <input type="Search" name="search" placeholder="Search">
                  <button class="btn btn-primary">Search</button>
                </form>
                <br><br/>
                LINKS
                <a href="adminpage.php"><p>Back To Admin Page</p></a>
                <a href="add.php"><p>Add New Data</p></a>
                <a href="edit.php"><p>Edit</p></a>
                <a href="delete.php"><p>Delete</p></a>
                <a href="log-out.php"><p>Logout</p></a>
          </div>
          <div class="col-lg-10 ">
            <div>
              <a href="adminpage.php">Go Back</a>
              <br/>
               <td><a href="edit.php"><i class="fa fa-edit prefix grey-text">Edit</i></a></td><!-- update -->
               <td><a href="delete.php"><i class="fa fa-trash prefix grey-text">Delete</i></a></td><!-- delete -->

              
            </div>
          
          
              <table class="table table-striped">
                <thead class="thead-dark">

                  <tr>
                    <th>Info </th> 
                    <th>Details for <?php echo "<strong> $firstname; </strong>" ?></th> 
                  </tr>
                </thead> 
                <tbody>
                    <tr>
                        <td>ID</td> 
                        <td><?php echo $id;?></td>
                    </tr>
                    <tr>
                        <td>First Name</td> 
                        <td><?php echo $firstname;?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td> 
                        <td><?php echo $lastname;?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td> 
                        <td><?php $email;?></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td> 
                        <td><?php echo $phonenumber;?></td>
                    </tr>
                     <tr>
                        <td>Message</td> 
                        <td><?php echo $message;?></td>
                    </tr>
                </tbody>
              </table>
          </div>
    </div>
</body>
</html>