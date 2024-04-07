<?php
require("connect-db.php");
require("request-db.php");
require("header.php");
?>

<?php // form handling
$list_of_requests = getAllRequests();
//var_dump($list_of_requests); //enables debugging by dumping value of object
$request_to_update = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') // GET
{
  if (!empty($_POST['addBtn']))
  {
    addRequests($_POST['requestedDate'], $_POST['roomNo'], $_POST['requestedBy'], $_POST['requestDesc'], $_POST['priority_option']);
    $list_of_requests = getAllRequests();
  }
  else if (!empty($_POST['updateBtn']))
  {
    // get reqId
    $request_to_update = getRequestById($_POST['reqId']);
    //var_dump($request_to_update);
  }
  else if (!empty($_POST['cofmBtn']))
  {
    // echo $_POST['cofm_reqId'] . ", " . $_POST['requestedDate'] .", " .  $_POST['roomNo'] .", " .  $_POST['requestedBy'] .", " .  $_POST['requestDesc'] .", " .  $_POST['priority_option']; 
    updateRequest($_POST['cofm_reqId'], $_POST['requestedDate'], $_POST['roomNo'], $_POST['requestedBy'], $_POST['requestDesc'], $_POST['priority_option']); 
    $list_of_requests = getAllRequests();

  }
  else if (!empty($_POST['deleteBtn']))
  {
    deleteRequest($_POST['reqId']);
    $list_of_requests = getAllRequests();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Upsorn Praphamontripong">
  <meta name="description" content="Maintenance request form, a small/toy web app for ISP homework assignment, used by CS 3250 (Software Testing)">
  <meta name="keywords" content="CS 3250, Upsorn, Praphamontripong, Software Testing">
  <link rel="icon" href="https://www.cs.virginia.edu/~up3f/cs3250/images/st-icon.png" type="image/png" />  
  
  <title>Maintenance Services</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  <link rel="stylesheet" href="db-project.css">  
</head>

<body> 
<div class="container">
  <div class="row g-3 mt-2">
    <div class="col">
      <h2>All Books</h2>
    </div>  
  </div>
  
  <!---------------->

</div>


<hr/>
<div class="container">
<h3>List of requests</h3>
<div class="row justify-content-center">  
<table class="w3-table w3-bordered w3-card-4 center" style="width:100%">
  <thead>
  <tr style="background-color:#B0B0B0">
    <th width="30%"><b>ReqID</b></th>
    <th width="30%"><b>Date</b></th>        
    <th width="30%"><b>Room#</b></th> 
    <th width="30%"><b>By</b></th>
    <th width="30%"><b>Description</b></th>        
    <th width="30%"><b>Priority</b></th> 
    <th><b>Update?</b></th>
    <th><b>Delete?</b></th>
  </tr>
  </thead>
  <!-- php iterate array of results, display the existing requests -->
  <?php foreach ($list_of_requests as $req_info): ?>
  <tr>
    <td><?php echo $req_info['reqId']; ?></td>
    <td><?php echo $req_info['reqDate']; ?></td>
    <td><?php echo $req_info['roomNumber']; ?></td>
    <td><?php echo $req_info['reqBy']; ?></td>
    <td><?php echo $req_info['repairDesc']; ?></td>
    <td><?php echo $req_info['reqPriority']; ?></td>
    <td>
      <form action="request.php" method="post">   <!-- get -->
        <input type="submit" value="Update" name="updateBtn" class="btn btn-primary" />
        <input type="hidden" name="reqId" value="<?php echo $req_info['reqId']; ?>" />
      </form>
    </td>
    <td>
      <form action="request.php" method="post">   <!-- get -->
        <input type="submit" value="Delete" name="deleteBtn" class="btn btn-danger" />
        <input type="hidden" name="reqId" value="<?php echo $req_info['reqId']; ?>" /> 
      </form>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</div>   


<br/><br/>

<?php include('footer.html') ?> 

<!-- <script src='maintenance-system.js'></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>