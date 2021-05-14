<?php include('partials/header.php');?>
<!---------------------Single product detail----------------------------->

        <div class="small-container single-product">
            <div class="row1">
                <?php
                    $id=$_GET['id'];
                    $sql = $db->query("SELECT * FROM tbl_product WHERE id=$id");
                    if($sql->num_rows > 0)
                    {
                        while($row = $sql->fetch_assoc())
                        {
                            $product_name = $row['product_name'];
                            
                            $product_description = $row['description'] ;
                            #$product_description = str_replace("<>","<br>",$row['description']);
                            $product_price = $row['price'];
                            $image_url = 'images/uploads/'.$row["file_name"];
                            ?>
                            <div class="col-21">
                            <img src="<?php echo $image_url; ?>"  id="product-img" alt="" width="300px">
                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="<?php echo $image_url; ?>" alt="" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/image3.jpg" alt="" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/image1.jpg" alt="" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/about-bak.jpg" alt="" width="100%" class="small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <p>Home|Speaker</p>
                            <h1><?php echo $product_name;?></h1>
                            <h4><?php echo $product_price;?>Rs</h4>
                            <h3>Product Detail</h3>
                            <br>
                            <p><?php echo $product_description;?></p>
                        </div>
                        <?php
                        }
                    }
                ?>
                
            </div>
        </div>

<!---------------------Related Product----------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <a href="products.php">View More>></a>
            </div>
        </div>
    <div class="small-container">
        <div class="row">
        <?php
            $sql = $db->query("SELECT * FROM tbl_product LIMIT 4");
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