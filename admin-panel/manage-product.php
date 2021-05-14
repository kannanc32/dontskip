<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Product</h1>

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
                <a href="add-product.php" class="btn-primary">Add New Product</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.No</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Product Image</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Query to Get all CAtegories from Database
                        $query = $db->query("SELECT * FROM tbl_product");
                        $sn=1;
                        //Execute Query
                        if($query->num_rows > 0)
                        {
                            while($row = $query->fetch_assoc())
                            {
                                $id = $row['id'];
                                $name= $row['product_name'];
                                $price = $row['price'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                                $description =$row['description'];
                                $image_url = '../images/uploads/'.$row["file_name"];
                                ?>
                                <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $description;?></td>
                                        <td><?php echo $price;?></td>
                                        <td><?php echo $featured?></td>
                                        <td><?php echo $active?></td>
                                        <td><img src="<?php echo $image_url; ?>" alt="" width="100px"/></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin-panel/update-product.php?id=<?php echo $id; ?>" class="btn-secondary">Update Product</a>
                                            <a href="<?php echo SITEURL; ?>admin-panel/delete-product.php?id=<?php echo $id; ?>" class="btn-danger">Delete Product</a>
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