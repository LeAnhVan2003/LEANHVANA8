<?php
use App\Models\Brand;
$list = Brand::all();
?>
<?php
use App\Models\Order;
$list = Order::all();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
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
                  Noi dung
               </div>
               <div class="card-body p-2">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th class="text-center" style="width:130px;">Hình ảnh</th>
                           <th>Tên thương hiệu</th>
                           <th>Tên slug</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php foreach($list as $item) : ?>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                           <img src="../public/images/brand/<?=$item->image;?>" alt="<?=$item->image;?>">
                           </td>
                           <td>
                              <div class="name">
                              <?php echo $item->name; ?>
                              </div>
                              <div class="function_style">
                              <?php if($item->status==1):?>
                                          <a class="text-success" href="idex.php?option=category&cat=status">Hiện</a> |
                                       <?php else:?>
                                          <a class="text-danger" href="idex.php?option=category&cat=status&id= <?php echo $item->id; ?>">Ẩn</a> |
                                       <?php endif;?>
                                       <a href="idex.php?option=category&cat=edit&id= <?php echo $item->id; ?>">Chỉnh sửa</a> |   
                                       <a href="idex.php?option=category&cat=show&id= <?php echo $item->id; ?>">Chi tiết</a> |
                                       <a href="idex.php?option=category&cat=delete&id= <?php echo $item->id; ?>">Xoá</a>
                              </div>
                           </td>
                           <td>Slug</td>
                        </tr>
                        <?php endforeach;?>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>