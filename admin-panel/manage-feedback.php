<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Feedback</h1>

        <br /><br />
        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['remove']))
            {
                echo $_SESSION['remove'];
                unset($_SESSION['remove']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['no-category-found']))
            {
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

            if(isset($_SESSION['failed-remove']))
            {
                echo $_SESSION['failed-remove'];
                unset($_SESSION['failed-remove']);
            }
        
        ?>
        <br><br>
            <!-- Button to Add Admin -->
                

                
                <table class="tbl-full">
                    <tr>
                        <th>S.No</th>
                        <th>User Name</th>
                        <th>Feedback</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Query to Get all CAtegories from Database
                        $query = $db->query("SELECT * FROM feedback_form");
                        $sn=1;
                        //Execute Query
                        if($query->num_rows > 0)
                        {
                            while($row = $query->fetch_assoc())
                            {
                                $id = $row['id'];
                                $customer_name= $row['customer_name'];
                                $feedback = $row['feedback'];
                                $email_address = $row['email_address'];
                                $phone_number = $row['phone_number'];
                                ?>
                                <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $feedback;?></td>
                                        <td><?php echo $email_address?></td>
                                        <td><?php echo $phone_number?></td>
                                        <td>
                                        <a href="<?php echo SITEURL; ?>admin-panel/delete-feedback.php?id=<?php echo $id; ?>" class="btn-danger">Delete Product</a>
                                        </td>
                                </tr>
                                <?php 
                            }
                        }
                        else
                        { 
                            ?>
                            <p>No image(s) found...</p>
                            <?php
                        } 
                        ?>          
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>