<?PHP 
        $title='View Records';
         require_once'includes/header.php';
         require_once'db/conn.php';
        $results = $crud->getAttendees();
     ?>

    <table class="table">
        <tr class="table-active">
            <th>#</th>
            <th>Date</th>
            <th>Trade_Code</th>
            <th>High</th>
            <th>Low</th>
            <th>Open</th>
            <th>Close</th>
            <th>Volume</th>


        </tr>

        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){    ?>
            <tr>
                <td><?php echo $r['id'] ?></td>
                <td><?php echo $r['SubmitDate'] ?></td>
                <td><?php echo $r['Trade_Code'] ?></td>
                <td><?php echo $r['High'] ?></td>
                <td><?php echo $r['Low'] ?></td>
                <td><?php echo $r['Opening'] ?></td>
                <td><?php echo $r['Closing'] ?></td>
                <td><?php echo $r['Volume'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['id'] ?>" class="btn btn-primary" >View</a>
                    <a href="edit.php?id=<?php echo $r['id'] ?>" class="btn btn-warning" >Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');"
                     href="delete.php?id=<?php echo $r['ud'] ?>" class="btn btn-danger" >Delete</a>
                </td>
            </tr>

        <?php } ?>

    </table>


<br>
<br>
<br>
<br>
<br>

    <?PHP require_once('includes/footer.php'); ?>