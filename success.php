<?PHP 
        $title='Success';
         require_once 'includes/header.php';
         require_once 'db/conn.php';

         if(isset($_POST['submit'])){
             $SubmitDate= $_POST['SubmitDate'];
             $Trade_Code= $_POST['Trade_Code'];
             $High= $_POST['High'];
             $Low= $_POST['Low'];
             $Opening= $_POST['Opening'];
             $Closing= $_POST['Closing'];
             $Volume= $_POST['Volume'];
             

             $isSuccess = $crud -> insert($SubmitDate,$Trade_Code,$High,$Low,$Opening,$Closing,$Volume);

             if($isSuccess){
                 include 'includes/successmessage.php';
                 

             }
             else{

                include 'includes/errormessage.php';
                
             }
         }
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
                 Open: <?php echo $_POST['Opening']  ;?>

            </h6>
            <h6 class="card-text">
                 Close: <?php echo $_POST['Closing']  ;?>

            </h6>
            <h6 class="card-text">
                 Volume  : <?php echo $_POST['Volume']  ;?>

            </h6>
           
           
        </div>
     </div>

    


<br>
<br>
<br>
<br>
<br>

    <?PHP require_once('includes/footer.php'); ?>