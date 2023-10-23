<?php
use App\Models\Customer;

//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM brand wher status!=0 and id=1 order by created_at desc

$list = customer::where('status','!=',0)->orderBy('Created_at','DESC')->get();

?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=customer&cat=process" method="post" enctype="multipart/form-data">

      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả khách hàng</h1>
                     <a href="index.php?option=customer&cat=create" class="btn btn-sm btn-primary">Thêm khách hàng</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header">
                  Noi dung
               </div>
               <div class="card-body">
                  <table class="table table-bordered" id="mytable">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th class="text-center" style="width:130px;">Hình ảnh</th>
                           <th>Họ tên</th>
                           <th>Điện thoại</th>
                           <th>Email</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php if(count($list) > 0) : ?>
                              <?php foreach($list as $item ):?>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                           <img src="../public/images/customer/<?=$item->image;?>" alt="<?=$item->image;?>">
                           </td>
                           <td>
                              <div class="name">
                              <?= $item->name ; ?> 
                              </div>
                              <div class="function_style">
                                 <a href="#">Hiện</a> |
                                 <a href="#">Chỉnh sửa</a> |
                                 <a href="customer_show.html">Chi tiết</a> |
                                 <a href="#">Xoá</a>
                              </div>
                           </td>
                           <td>0987654331</td>
                           <td>dienloisoft@gmail.com</td>
                        </tr>
                        <?php endforeach;?>
                              <?php endif;?>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
</div>
      </form>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>