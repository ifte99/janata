<?PHP 
        $title='View Record';
         require_once'includes/header.php';
         require_once'db/conn.php';

         //get attendee by id

         if(!isset($_GET['id'])){
            include 'includes/errormessage.php';
        }
      
         else{
            $id = $_GET['id'];
           $result = $crud->getAttendeeDetails($id);
         

            
       
     ?>

<div class="card" style="width: 18rem;">
        <div class="card-body">
        <h6 class="card-text">
               Date :  <?php echo $_POST['SubmitDate']  ;?>

            </h6>

            <h6 class="card-text">
                Trade_Code: <?php echo $_POST['Trade_Code']  ;?>

            </h6>
            <h6 class="card-text">
                 High  : <?php echo $_POST['High']  ;?>

            </h6>
            <h6 class="card-text">
                 Low  : <?php echo $_POST['Low']  ;?>

            </h6>
            <h6 class="card-text">
                 Open  : <?php echo $_POST['Opening']  ;?>

            </h6>
            <h6 class="card-text">
                 Close  : <?php echo $_POST['Closing']  ;?>

            </h6>
            <h6 class="card-text">
                 Volume  : <?php echo $_POST['Volume']  ;?>

            </h6>
           
        </div>
     </div> 
     <br/>
          <a href="viewrecords.php" class="btn btn-info" >Back to List</a>
          <a href="edit.php?id=<?php echo $result['id'] ?>" class="btn btn-warning" >Edit</a>
          <a onclick="return confirm('Are you sure you want to delete this record?');"
             href="delete.php?id=<?php echo $result['id'] ?>" class="btn btn-danger" >Delete</a>

  <?php } ?>

<br>
<br>
<br>
<br>
<br>

    <?PHP require_once('includes/footer.php'); ?>