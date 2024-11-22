<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Panel</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{asset('admin/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{asset('admin/index')}}" class="logo">
              <img
                src="assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>

            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">



                <li class="nav-item">
                    <a href="{{asset('admin/index')}}">
                      <i class="fas fa-desktop"></i>
                      <p>All Products</p>

                    </a>
                  </li>






              <li class="nav-item">
                <a data-bs-toggle="collapse" href="{{asset('admin/addproduct')}}">
                  <i class="fas fa-bars"></i>
                  <p>Add New Product</p>

                </a>

              </li>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="">
                  <i class="fas fa-pen-square"></i>
                  <p>Edit Product</p>
                </a>

              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">

          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                  />
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="{{asset('admin/omar.jpeg')}}"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">Omar</span>
                    </span>
                  </a>

                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex justify-content-end align-items-md-center flex-row flex-md-row pt-2 pb-4"
            >

              <div class="ms-md-4 py-2 py-md-0">
                <a href="{{route('aindex')}}" class="btn btn-primary btn-round">All Products</a>
              </div>
              <div class="ms-md-4 py-2 py-md-0">
                <a href="" class="btn btn-primary btn-round">Edit Products</a>
              </div>
              <div class="ms-md-4 py-2 py-md-0">
                <a href="{{route('aaddproduct')}}" class="btn btn-primary btn-round">Add Product</a>
              </div>
            </div>



            <div class="row">
              <div class="col-md-4">

              </div>
              <div class="col-md-12">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Product Inventory</div>
                      <div class="card-tools">

                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Article</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>


                        @foreach ($products as $product)
                          <tr class="text-center">
                            <td>{{$product->id}}</td>
                            <td >{{$product->name}}</td>
                            <td >{{$product->description}}</td>
                            <td >${{$product->price}}</td>
                            <td >
                            <img class="w-25 rounded-3" src="{{$product->image}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('aeditproduct',[$product->id])}}"
                                    class="btn btn-sm btn-success btn-round edit-btn">Edit</a>

                                <a href="{{ route('adeleteproduct', $product->id) }}"
                                    class="btn btn-sm btn-danger btn-round delete-btn">Delete</a>
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
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-center">

            <div class="copyright align-center">
              Made with <i class="fa fa-heart heart text-danger"></i> by
              <a>Omar</a>
            </div>

          </div>
        </footer>
      </div>

    </div>
  </body>
</html>
