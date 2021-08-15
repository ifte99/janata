<?PHP 
        $title='Index';
         require_once'includes/header.php';
         require_once'db/conn.php';
        
     ?>

    <h1 class="text-center">JANATA TRADING</h1>

    <form method="post" action="success.php">
    

    <div class="mb-3">
            <label for="SubmitDate" class="form-label">SubmitDate</label>
            <input type="text" class="form-control" id="SubmitDate"   name="SubmitDate">      
        </div>

       
        <div class="mb-3">
            <label for="Trade_Code" class="form-label">Trade Code</label>
            <input  type="text" class="form-control" id="Trade_Code" name="Trade_Code" >
            
        </div>

        <div class="mb-3">
            <label for="High" class="form-label">High</label>
            <input  type="text" class="form-control" id="High" name="High" >
            
        </div>

        <div class="mb-3">
            <label for="Low" class="form-label">Low</label>
            <input  type="text" class="form-control" id="Low" name="Low" >
            
        </div>
        <div class="mb-3">
            <label for="Open" class="form-label">Open</label>
            <input  type="text" class="form-control" id="Opening" name="Opening" >
            
        </div>
        <div class="mb-3">
            <label for="Close" class="form-label">Close</label>
            <input  type="text" class="form-control" id="Closing" name="Closing" >
            
        </div>
        <div class="mb-3">
            <label for="Volume" class="form-label">Volume</label>
            <input  type="text" class="form-control" id="Volume" name="Volume" >
            
        </div>

        <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
<br>
<br>
<br>
<br>
<br>

    <?PHP require_once('includes/footer.php'); ?>