@include ('admin/header')
@include ('admin/sidebar')

@include ('admin/script')
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box" style='background-color: #cc5500;'>
            <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>Posts</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">DG</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Posts</li>
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
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-success mb-2"><i class="mdi mdi-plus me-2"></i> Add Customer</a>
                                        </div>
                                        <div class="table-responsive mt-3">
                                            <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customercheck">
                                                                <label class="form-check-label" for="customercheck">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Products Name</th>
                                                        <th>Manufacturer Brand</th>
                                                        <th>Price</th>
                                                        <th>Category</th>
                                                        <th>Quanity</th>
                                                        <th style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                             @foreach ($products as $products)
                                          
                                                <tr>
                                                    
                                                
                                                </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customercheck1">
                                                                <label class="form-check-label" for="customercheck1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>{{ $products->Product_name}}</td>
                                                        
                                                        
                                                        <td>{{ $products->Manufacturer_Brand}}</td>
                                                        <td>Rs.{{ $products->Price}}</td>
                                                        <td>{{ $products->Category}}</td>
                                                        <td>{{ $products->quantity}}</td>
                                                        
                                                        
                                                     
                                                        <td id="tooltip-container0">
                                                            <a href = {{('edit/{{ $products->id }}')}} class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="productsdelete/{{$products->id}}" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                        </td>
                                                      
                                                    </tr>
                                             @endforeach
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- end row -->

                </div>


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Daily Grocery 
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Nepal E-Commerce & Software Technology 
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
        </body>
</html>