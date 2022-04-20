@include ('admin/header')
@include ('admin/sidebar')

@include ('admin/script')
<div class="main-content">
            <div class="page-content">
              <!-- start page title -->
              <div class="page-title-box" style="background-color: #cc5500;">
                <div class="container-fluid">
                  <div class="row align-items-center">
                    <div class="col-sm-6">
                      <div class="page-title">
                        <h4>Add Users</h4>
                        <ol class="breadcrumb m-0">
                          <li class="breadcrumb-item">
                            <a href="javascript: void(0);">DG</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="javascript: void(0);">Users</a>
                          </li>
                          <li class="breadcrumb-item active">Add User</li>
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
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">Add User</h4>
                          <p class="card-title-desc">
                           Input the users details.
                          </p>
                          <div class="row mb-3">
                            <label
                              for="example-text-input"
                              class="col-sm-2 col-form-label"
                              >Name</label
                            >
                            <div class="col-sm-10">
                              <input
                                class="form-control"
                                type="text"
                                placeholder="Full Name"
                                id="example-text-input"
                              />
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <label
                              for="example-email-input"
                              class="col-sm-2 col-form-label"
                              >Email</label
                            >
                            <div class="col-sm-10">
                              <input
                                class="form-control"
                                type="email"
                                placeholder="dg@dg.com"
                                id="example-email-input"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="example-url-input" class="col-sm-2 col-form-label"
                              >Phone Number</label
                            >
                            <div class="col-sm-10">
                              <input
                                class="form-control"
                                type="tel"
                                placeholder="Number"
                                id="example-url-input"
                              />
                            </div>
                          </div>
                       
                          <!-- <div class="row mb-3">
                            <label for="example-tel-input" class="col-sm-2 col-form-label"
                              >Telephone</label
                            >
                            <div class="col-sm-10">
                              <input
                                class="form-control"
                                type="tel"
                                placeholder="1-(555)-555-5555"
                                id="example-tel-input"
                              />
                            </div>
                          </div> -->
                          <div class="row mb-3">
                            <label
                              for="example-password-input"
                              class="col-sm-2 col-form-label"
                              >Password</label
                            >
                            <div class="col-sm-10">
                              <input
                                class="form-control"
                                type="password"
                                value="hunter2"
                                id="example-password-input"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label
                              for="example-password-input"
                              class="col-sm-2 col-form-label"
                              >Confirm Password</label
                            >
                            <div class="col-sm-10">
                              <input
                                class="form-control"
                                type="password"
                                value="hunter2"
                                id="example-password-input"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label
                              for="example-password-input"
                              class="col-sm-2 col-form-label"
                              >Profile Photo</label
                            >
                            <div class="col-sm-10">
                              <input
                                class="form-control"
                                type="file"
                               
                                id="example-password-input"
                              />
                            </div>
                           
                          </div>
                          <div class="float-end d-none d-sm-block">
                            <a href="" class="btn btn-success">Create Account</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end col -->
                  </div>
                  <!-- end row -->
          
                  <!-- <div class="row">
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">Sizing</h4>
                          <p class="card-title-desc">
                            Set heights using classes like
                            <code>.form-control-lg</code> and
                            <code>.form-control-sm</code>.
                          </p>
                          <div>
                            <div class="mb-4">
                              <input
                                class="form-control"
                                type="text"
                                placeholder="Default input"
                              />
                            </div>
                            <div class="mb-4">
                              <input
                                class="form-control form-control-sm"
                                type="text"
                                placeholder=".form-control-sm"
                              />
                            </div>
                            <div>
                              <input
                                class="form-control form-control-lg"
                                type="text"
                                placeholder=".form-control-lg"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">Range Inputs</h4>
                          <p class="card-title-desc">
                            Set horizontally scrollable range inputs using
                            <code>.form-control-range</code>.
                          </p>
          
                          <div>
                            <h5 class="font-size-14">Example</h5>
                            <input
                              type="range"
                              class="form-range"
                              id="formControlRange"
                            />
                          </div>
                          <div class="mt-4">
                            <h5 class="font-size-14">Custom Range</h5>
                            <input type="range" class="form-range" id="customRange1" />
          
                            <input
                              type="range"
                              class="form-range mt-3"
                              min="0"
                              max="5"
                              id="customRange2"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
          
                  <!-- <div class="row">
                    <div class="col-xl-6">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title mb-4">Checkboxes</h4>
          
                          <div class="row">
                            <div class="col-md-5">
                              <div>
                                <h5 class="font-size-14 mb-4">Form Checkboxes</h5>
                                <div class="form-check mb-3">
                                  <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="formCheck1"
                                  />
                                  <label class="form-check-label" for="formCheck1">
                                    Form Checkbox
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="formCheck2"
                                    checked
                                  />
                                  <label class="form-check-label" for="formCheck2">
                                    Form Checkbox checked
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 ms-auto">
                              <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-4">Form Checkboxes Right</h5>
                                <div>
                                  <div class="form-check form-check-right mb-3">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      id="formCheckRight1"
                                    />
                                    <label class="form-check-label" for="formCheckRight1">
                                      Form Checkbox Right
                                    </label>
                                  </div>
                                </div>
                                <div>
                                  <div class="form-check form-check-right">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      id="formCheckRight2"
                                      checked
                                    />
                                    <label class="form-check-label" for="formCheckRight2">
                                      Form Checkbox Right checked
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title mb-4">Radios</h4>
          
                          <div class="row">
                            <div class="col-md-5">
                              <div>
                                <h5 class="font-size-14 mb-4">Form Radios</h5>
                                <div class="form-check mb-3">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="formRadios"
                                    id="formRadios1"
                                    checked
                                  />
                                  <label class="form-check-label" for="formRadios1">
                                    Form Radio
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="formRadios"
                                    id="formRadios2"
                                  />
                                  <label class="form-check-label" for="formRadios2">
                                    Form Radio checked
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 ms-auto">
                              <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-4">Form Radios Right</h5>
                                <div>
                                  <div class="form-check form-check-right mb-3">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="formRadiosRight"
                                      id="formRadiosRight1"
                                      checked
                                    />
                                    <label
                                      class="form-check-label"
                                      for="formRadiosRight1"
                                    >
                                      Form Radio Right
                                    </label>
                                  </div>
                                </div>
          
                                <div>
                                  <div class="form-check form-check-right">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="formRadiosRight"
                                      id="formRadiosRight2"
                                    />
                                    <label
                                      class="form-check-label"
                                      for="formRadiosRight2"
                                    >
                                      Form Radio Right checked
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- end row -->
          
                  <!-- <div class="row">
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">Switches</h4>
                          <p class="card-title-desc">
                            A switch has the markup of a custom checkbox but uses the
                            <code>.form-switch</code> class to render a toggle switch.
                            Switches also support the <code>disabled</code> attribute.
                          </p>
                          <div class="form-check form-switch mb-3" dir="ltr">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              id="customSwitch1"
                              checked
                            />
                            <label class="form-check-label" for="customSwitch1"
                              >Toggle this switch element</label
                            >
                          </div>
                          <div class="form-check form-switch" dir="ltr">
                            <input
                              type="checkbox"
                              class="form-check-input"
                              disabled
                              id="customSwitch2"
                            />
                            <label class="form-check-label" for="customSwitch2"
                              >Disabled switch element</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>
          
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="header-title">File browser</h4>
                          <p class="card-title-desc">
                            The file input is the most gnarly of the bunch and requires
                            additional JavaScript if you’d like to hook them up with
                            functional <em>Choose file…</em> and selected file name text.
                          </p>
                          <div class="input-group">
                            <input type="file" class="form-control" id="customFile" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  -->
                  <!-- end row -->
                </div>
              </div>
              <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
          
            <footer class="footer">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    © Daily Grocery.
                  </div>
                  <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                      Copyright © 2020 <a href="http://www.dg.com/" rel="noopener"
                        target="_blank"
                        >DG</a
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div>
        </body>
</html>