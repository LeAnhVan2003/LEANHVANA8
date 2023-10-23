<?php
use App\Models\Contact;
//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM brand wher status!=0 and id=1 order by created_at desc

$list = Contact::where('status','!=',0)->orderBy('Created_at','DESC')->get();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=contact&cat=process" method="post" enctype="multipart/form-data">
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả liên hệ</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header">
               <div class="row">
                 <div class="col-md-6">
                  <a href="index.php?option=contact">Tất cả</a> |
                  <a href="index.php?option=contact&cat=trash"> Thùng rác</a>
                 </div>
                 Nội Dung
               </div>
               <div class="card-body">
                  <table class="table table-bordered" id="mytable">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th>user_id</th>
                           <th>Họ tên</th>
                           <th>Email</th>
                           <th>Điện thoại</th>

                           <th>Tiêu đề</th>
                           <th>Nội Dung</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                              1
                              </div>
                              <div class="function_style">
                                 <a href="#">Hiện</a> |
                                 <a href="#">Trả lời</a> |
                                 <a href="../backend/brand_show.html">Chi tiết</a> |
                                 <a href="#">Xoá</a>
                              </div>
                           </td>
                           <td>LeAnhVan</td>
                           <td>leanhvan.20072004@gmail.com</td>
                           <td>0799034669</td>
                           <td>Chủ shop</td>
                           <td>Bán Hàng Rong</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <form action ="index.php?option=brand&cat=process" method="post" enctype="multipart/form-data">
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>