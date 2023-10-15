<?php
use App\Models\Order;
$list = Order::where('status','!=',0)->orderBy('Created_at','DESC')->get();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=order&cat=process" method="post" enctype="multipart/form-data">

      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả thương hiệu</h1>
                     <a href="index.php?option=brand" class="btn btn-sm btn-primary">Thêm thương hiêu</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">  
            <div class="card">
               <div class="card-header p-2">
                Nội Dung
               </div>
               <div class="card-body p-2">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th>User_id</th>
                           <th>Tên Giao Hàng</th>
                           <th>Điện Thoại Giao Hàng</th>
                           <th>Email Giao Hàng</th>
                           <th>Địa Chỉ Giao Hàng</th>
                           <th>Ghi Chú</th>
                        </tr>
                     </thead>
                     
                     <tbody>
                     <?php if(count($list) > 0) : ?>
                              <?php foreach($list as $item   ):?>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                         
                           <td>
                              <div class="User_id">
                              <?= $item->User_id ; ?> 
                           <td>
                              <div class="deliveryname">
                              <?= $item->deliveryname ; ?> 
                            
                           </td>
                           <td>
                              <div class="deliveryphone">
                              <?= $item->deliveryphone ; ?> 
                            
                           </td>
                           <td>
                              <div class="deliveryemail">
                              <?= $item->deliveryemail ; ?> 
                            
                           </td>
                           <td>
                              <div class="deliveryaddress">
                              <?= $item->deliveryaddress ; ?> 
                                 
                           </td>
                           <td>
                              <div class="note">
                              <?= $item->note ; ?> 
                            
                           </td>
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

