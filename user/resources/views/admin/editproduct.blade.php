@include ('admin/header')
@include ('admin/sidebar')


<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box" style="background-color: #cc5500;"  >
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>Add Product</h4>
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">DG</a></li>
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                 <li class="breadcrumb-item active">Add Product</li>
                             </ol>
                     </div>
                 </div>
                 <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="" class="btn btn-success">Add Widget</a>
                    </div>
                 </div>
             </div>
            </div>
         </div>
         <!-- end page title -->    


        <div class="container-fluid">

            <div class="page-content-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav">
                                    </ul>

                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div >
                                            <h4 class="header-title">Basic Information</h4>
                                            <p class="card-title-desc">Fill all information below</p>

                                            
                                                <form action = "{{URL('/edit/<?php echo $products[0]->id; ?>')}}" method = "put">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label" for="productname">Product Name</label>
                                                    <input id="productname" name="Product_name" type="text" class="form-control"  value = '<?php echo $products[0]->Product_name; ?>'>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="manufacturername">Manufacturer Name</label>
                                                            <input id="manufacturername" name="Manufacturer_name" type="text" class="form-control" value = '<?php echo $products[0]->Manufacturer_name; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="manufacturerbrand">Manufacturer Brand</label>
                                                            <input id="manufacturerbrand" name="Manufacturer_Brand" type="text" class="form-control" value = '<?php echo $products[0]->Manufacturer_Brand; ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="price">Price</label>
                                                            <input id="price" name="Price" type="text" class="form-control" value = '<?php echo $products[0]->Price; ?>'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="control-label">Category</label>
                                                                            <select class="form-control select2">
                                                                                <option>Select</option>
                                                                                <option value="EL" name="Category">Electronic</option>
                                                                                <option value="FA" name="Category">Fashion</option>
                                                                                <option value="FI" name="Category">Fitness</option>
                                                                            </select>
                                                                        </div>
                                                     </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="control-label">Features</label>
            
                                                            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                                <option value="TO" name="Features">Touchscreen</option>
                                                                <option value="CF" name="Features">Call Function</option>
                                                                <option value="NO" name="Features" selected>Notifications</option>
                                                                <option value="FI" name="Features" selected>Fitness</option>
                                                                <option value="OU" name="Features">Outdoor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="productdesc">Product Description</label>
                                                    <textarea class="form-control" id="productdesc" rows="5" name="Product_description" value = '<?php echo $products[0]->Product_description; ?>'></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="productdesc">Product Details</label>
                                                    <textarea class="form-control" id="productdesc" rows="5" name="Products_details" value = '<?php echo $products[0]->Products_details; ?>'></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="quantity">Quantity</label>
                                                    <input id="quantity" name="quantity" type="number" class="form-control" value = '<?php echo $products[0]->quantity; ?>'>
                                                </div>
                                     
                                            <h4 class="header-title">Product Images</h4>
                                            <p class="card-title-desc">Upload product image</p>
                                           
                                                <div class="fallback">
                                                    <input name="Product_image" type="file" multiple value = '<?php echo $products[0]->Product_image; ?>' />
                                                </div>
                
                                                <div class="dz-message needsclick" style="display:flex; flex-direction:column; align-items:center; justify-content:center; ">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted mdi mdi-cloud-download-outline"></i>
                                                    </div>
                                                    
                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                           
                                            <h4 class="header-title">Featured Product Image</h4>
                                            <p class="card-title-desc">Upload featured image</p>
                                           
                                                <div class="fallback">
                                                    <input name="Featured_image" type="file" value = '<?php echo $products[0]->Featured_image; ?>' />
                                                </div>
                
                                                <div class="dz-message needsclick" style="display:flex; flex-direction:column; align-items:center; justify-content:center; ">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted mdi mdi-cloud-download-outline"></i>
                                                    </div>
                                                    
                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>

                                               

                                                <div class="float-end d-none d-sm-block" style="margin: 10px auto">
                                                    <input type="submit" class="btn btn-success" value="Update">
                                                  </div>
                                                  
                                            
                                        </form>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        

            </div>

            
        </div> 
    </div>
 

  
    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Morvin.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- @include ('admin/script') -->
<script src="{{asset ('assetsAdmin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset ('assetsAdmin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('assetsAdmin/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset ('assetsAdmin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset ('assetsAdmin/libs/node-waves/waves.min.js')}}"></script>


        </body>
</html>