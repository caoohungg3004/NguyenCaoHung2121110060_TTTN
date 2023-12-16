<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Tiêu đề giao diện</title>
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="public/fontawesome/css/all.min.css">

   <link rel="stylesheet" href="public/css/backend.css">
</head>

<body>
   <section class="hdl-header sticky-top">
      <div class="container-fluid">
         <ul class="menutop">
            <li>
               <a href="">
                  <i class="fa-brands fa-dashcube"></i> Shop Thời trang
               </a>
            </li>
            <li class="text-phai">
               <a href="">
                  <i class="fa-solid fa-power-off"></i> Thoát
               </a>
            </li>
            <li class="text-phai">
               <a href="">
                  <i class="fa fa-user"></i> Chào quản lý
               </a>
            </li>
         </ul>
      </div>
   </section>
   <section class="hdl-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-2 bg-dark p-0 hdl-left">
               <div class="hdl-left">
                  <div class="dashboard-name">
                     Bản điều khiển
                  </div>
                  <nav class="m-2 mainmenu">
                     <ul class="main">
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Sản phẩm</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="product_index.html">Tất cả sản phẩm</a>
                              </li>
                              <li>
                                 <a href="product_import.html">Nhập hàng</a>
                              </li>
                              <li>
                                 <a href="category_index.html">Danh mục</a>
                              </li>
                              <li>
                                 <a href="brand_index.html">Thương hiệu</a>
                              </li>
                              <li>
                                 <a href="product_sale.html">Khuyễn mãi</a>
                              </li>
                           </ul>
                        </li>
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Bài viết</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="post_index.html">Tất cả bài viết</a>
                              </li>
                              <li>
                                 <a href="topic_index.html">Chủ đề</a>
                              </li>
                              <li>
                                 <a href="page_index.html">Trang đơn</a>
                              </li>
                           </ul>
                        </li>
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Quản lý bán hàng</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="order_index.html">Tất cả đơn hàng</a>
                              </li>
                              <li>
                                 <a href="order_export.html">Xuất hàng</a>
                              </li>
                           </ul>
                        </li>
                        <li class="hdlitem">
                           <i class="fa-regular fa-circle icon-left"></i>
                           <a href="customer_index.html">Khách hàng</a>
                        </li>
                        <li class="hdlitem">
                           <i class="fa-regular fa-circle icon-left"></i>
                           <a href="contact_index.html">Liên hệ</a>
                        </li>
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Giao diện</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="menu_index.html">Menu</a>
                              </li>
                              <li>
                                 <a href="banner_index.html">Banner</a>
                              </li>
                           </ul>
                        </li>
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Hệ thống</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="user_index.html">Thành viên</a>
                              </li>
                              <li>
                                 <a href="config_index.html">Cấu hình</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="col-md-10">
               <!--CONTENT  -->
               <div class="content">
                  <section class="content-header my-2">
                     <h1 class="d-inline">Thêm thành viên</h1>
                     <div class="row mt-2 align-items-center">
                        <div class="col-md-12 text-end">
                           <button class="btn btn-success btn-sm" name="THEM">
                              <i class="fa fa-save"></i> Lưu [Thêm]
                           </button>
                           <a href="user_index.html" class="btn btn-primary btn-sm">
                              <i class="fa fa-arrow-left"></i> Về danh sách
                           </a>
                        </div>
                     </div>
                  </section>
                  <section class="content-body my-2">
                     <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label><strong>Tên đăng nhập(*)</strong></label>
                                 <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" />
                              </div>
                              <div class="mb-3">
                                 <label><strong>Mật khẩu(*)</strong></label>
                                 <input type="password" name="password" class="form-control" placeholder="Mật khẩu" />
                              </div>
                              <div class="mb-3">
                                 <label><strong>Xác nhận mật khẩu(*)</strong></label>
                                 <input type="password" name="re_password" class="form-control"
                                    placeholder="Xác nhận mật khẩu" />
                              </div>
                              <div class="mb-3">
                                 <label><strong>Email(*)</strong></label>
                                 <input type="text" name="email" class="form-control" placeholder="Email" />
                              </div>
                              <div class="mb-3">
                                 <label><strong>Xác nhận email(*)</strong></label>
                                 <input type="text" name="re_email" class="form-control" placeholder="Xác nhận email" />
                              </div>
                              <div class="mb-3">
                                 <label><strong>Điện thoại(*)</strong></label>
                                 <input type="text" name="phone" class="form-control" placeholder="Điện thoại" />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                 <label><strong>Họ tên (*)</strong></label>
                                 <input type="text" name="name" class="form-control" placeholder="Họ tên" />
                              </div>
                              <div class="mb-3">
                                 <label><strong>Giới tính</strong></label>
                                 <select name="gender" id="gender" class="form-select">
                                    <option>Chọn giới tinh</option>
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                 </select>
                              </div>
                              <div class="mb-3">
                                 <label><strong>Địa chỉ</strong></label>
                                 <input type="text" name="address" class="form-control" placeholder="Địa chỉ" />
                              </div>
                              <div class="mb-3">
                                 <label><strong>Hình đại diện</strong></label>
                                 <input type="file" name="image" class="form-control" />
                              </div>
                              <div class="mb-3">
                                 <label><strong>Trạng thái</strong></label>
                                 <select name="status" class="form-select">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </form>

                  </section>
               </div>
               <!--END CONTENT-->
            </div>
         </div>
      </div>
   </section>
   <script src="public/jquery/jquery-3.7.0.min.js"></script>

   <script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="public/js/backend.js"></script>
</body>

</html>