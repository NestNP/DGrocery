 @include ('admin/header')
@include ('admin/sidebar')

@include ('admin/script')
<div class="main-content">
    <div class="page-content">
  
      <div class="page-title-box" style="background-color: #cc5500;">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-sm-6">
              <div class="page-title">
                <h4>Add Cateogory</h4>
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">DG</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Costumer</a>
                  </li>
                  <li class="breadcrumb-item active">Add Cateogory</li>
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

  
      <div class="container-fluid">
        <div class="page-content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  
                  <form action="/create" method="POST">
                    @csrf
                  <div class="row mb-3">
                    <label
                      for="example-text-input"
                      class="col-sm-2 col-form-label"
                      >Category</label>
                    <div class="col-sm-10">
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Cateogory Name"
                        id="example-text-input"
                        name="Category_name"
                      />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label
                      for="example-search-input"
                      class="col-sm-2 col-form-label"
                      >Slug</label
                    >
                    <div class="col-sm-10">
                      <input
                        class="form-control"
                        type="search"
                        placeholder="Sub-Cateogory"
                        id="example-search-input"
                        name="Slug"/>
                    </div>
                  </div>
                   
                  </div>


                  <div class="float-end d-none d-sm-block" style="margin: 10px auto">
                    <input type="submit" class="btn btn-success" value="Create">
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
            <script>
              document.write(new Date().getFullYear());
            </script>
            © Daily Grocery.
            © Bishan Poudel .
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>