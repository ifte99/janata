<?PHP 
        $title='Edit Record';
         require_once'includes/header.php';
         require_once'db/conn.php';
        // $results= $crud->getSpecialities();

         if(!isset($_GET['id'])){
             //echo 'error';
             include 'includes/errormessage.php';
             header("Location: viewrecords.php");


         }else{
             $id = $_GET['id'];

            $stock_market_data = $crud->getAttendeeDetails($id);
        

         
     ?>

    <h1 class="text-center">Edit Record</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $stock_market_data['id'] ?>" />
   
        <div class="mb-3">
            <label for="SubmitDate" class="form-label">Date</label>
            <input type="text" class="form-control" value="<?php echo $stock_market_data['SubmitDate'] ?>" id="SubmitDate"   name="SubmitDate">      
        </div>

        

        <div class="mb-3">
            <label for="Trade_Code" class="form-label">Trade Code</label>
            <input type="text" class="form-control"  id="Trade_Code" value="<?php echo $stock_market_data['Trade_Code'] ?>" name="Trade_Code" >
           
        </div>

        <div class="mb-3">
            <label for="High" class="form-label">High </label>
            <input type="text" class="form-control" value="<?php echo $stock_market_data['High'] ?>" id="High" name="High" >
            
        </div>
        
        <div class="mb-3">
            <label for="Low" class="form-label">Low </label>
            <input type="text" class="form-control" value="<?php echo $stock_market_data['Low'] ?>" id="Low" name="Low" >
            
        </div>
        
        <div class="mb-3">
            <label for="Opening" class="form-label">Open </label>
            <input type="text" class="form-control" value="<?php echo $stock_market_data['Opening'] ?>" id="Opening" name="Opening" >
            
        </div>

        <div class="mb-3">
            <label for="Closing" class="form-label">Close </label>
            <input type="text" class="form-control" value="<?php echo $stock_market_data['Closing'] ?>" id="Closing" name="Closing" >
            
        </div>

        <div class="mb-3">
            <label for="Volume" class="form-label">Volume </label>
            <input type="text" class="form-control" value="<?php echo $stock_market_data['Volume'] ?>" id="Volume" name="Volume" >
            
        </div>



        <div class="d-grid">
            <a href="viewrecords.php" class="btn btn-default ">Back to List</a>
            <button type="submit" name="submit" class="btn btn-success ">Save Changes</button>
        </div>
    </form>

    <?php } ?>
<br>
<br>
<br>
<br>
<br>

    <?PHP require_once('includes/footer.php'); ?>