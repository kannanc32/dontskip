<?php include('partials/header.php'); ?>
<!---------------------featured----------------------------->
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
        </div>
        <div class="row">
        <?php
            $sql = $db->query("SELECT * FROM tbl_product LIMIT 50");
            if($sql->num_rows > 0)
            {
                while($row = $sql->fetch_assoc())
                {
                    $id = $row['id'];
                    $product_name = $row['product_name'];
                    $product_price = $row['price'];
                    $image_url = 'images/uploads/'.$row["file_name"];
                    ?>
                    <div class="col-4">
                            <a href="<?php echo SITEURL; ?>product_detail.php?id=<?php echo $id; ?>"><img src="<?php echo $image_url; ?>" alt=""></a>
                            <h4><?php echo $product_name;?></h4>
                            <div class="rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </div>
                            <p><?php echo $product_price;?></p>
                        </div>
                        <?php
                }
            }
        ?>
        </div>
    </div>
<?php include('partials/footer.php');?>