
<!---------------------Footer----------------------------->
<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>All Copyrights 2021</h3>
                        <p>don'tskip</p>
                    </div>
                    <div class="footer-col-2">
                        <h3>Useful links</h3>
                        <ul>
                            <li><a href="about.php"><ion-icon name="pricetags-sharp"></ion-icon>About</a></li>
                            <li><a href=""><ion-icon name="book-sharp"></ion-icon>Blog Post</a></li>
                            <li><a href=""><ion-icon name="bus-outline"></ion-icon>Return Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col-3">
                        <h3>Follow Us</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/7.2cinemas"><ion-icon name="logo-facebook"></ion-icon>Facebook</a></li>
                            <li><a href="https://www.instagram.com/dontskiptrichy/"><ion-icon name="logo-instagram"></ion-icon>Instagram</a></li>
                            <li><a href=""><ion-icon name="logo-whatsapp"></ion-icon>WhatsApp</a></li>
                            <li><a href="mailto:dontskip.in@gmail.com"><ion-icon name="mail-outline"></ion-icon>Gmail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!-----------------------------JS For Menu Toggle--------------------------->
        <script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else
                {
                        MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
        <!-----------------------------JS For Menu Toggle--------------------------->
        <script>
            var ProductImg = document.getElementById("product-img");
            var smallImg = document.getElementsByClassName("small-img");
                smallImg[0].onclick =function()
                {
                    ProductImg.src = smallImg[0].src
                }
                smallImg[1].onclick =function()
                {
                    ProductImg.src = smallImg[1].src
                }
                smallImg[2].onclick =function()
                {
                    ProductImg.src = smallImg[2].src
                }
                smallImg[3].onclick =function()
                {
                    ProductImg.src = smallImg[3].src
                }
        </script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>  
</body>
</html>