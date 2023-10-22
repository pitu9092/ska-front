<?php include("header.php");?>
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>My account</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
	<section class="main_content_area">
        <div class="container">   
            <div class="account_dashboard">
                <div class="row">
				<?php include("account_sidebar.php");?>
				
				  <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                           
                       
     <!--shopping cart area start -->
    <div class="shopping_cart_area">
         
            <form action="#"> 
              
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                    <td class="product-price">£65.00</td>
                                    <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="1" type="number"></td>
                                    <td class="product_total">£130.00</td>


                                </tr>

                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Handbags justo</a></td>
                                    <td class="product-price">£90.00</td>
                                    <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="1" type="number"></td>
                                    <td class="product_total">£180.00</td>


                                </tr>
                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product5.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Handbag elit</a></td>
                                    <td class="product-price">£80.00</td>
                                    <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="1" type="number"></td>
                                    <td class="product_total">£160.00</td>


                                </tr>

                            </tbody>
                        </table>   
                            </div>  
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>      
                        </div>
                    
         
            </form> 
            
    </div>
     <!--shopping cart area end -->
                            
                            
                        </div>
                    </div>
                </div>
            </div>  
        </div>        	
    </section>			
    <!-- my account end   --> 

<?php include("footer.php");?>