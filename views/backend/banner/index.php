<?php
use App\Models\Banner;
$list = Banner::all();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả banner</h1>
                     <a href="index.php?option=banner&cat=create" class="btn btn-sm btn-primary">Thêm banner</a>
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
                           <th>Tên banner</th>
                           <th>Liên kết</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php foreach($list as $item) : ?>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                              <div class="name">
                              <?php echo $item->name; ?>
                              </div>
                              <div class="function_style">
                              <?php if($item->status==1):?>
                                          <a class="text-success" href="idex.php?option=banner&cat=status">Hiện</a> |
                                       <?php else:?>
                                          <a class="text-danger" href="idex.php?option=banner&cat=status&id= <?php echo $item->id; ?>">Ẩn</a> |
                                       <?php endif;?>
                                       <a href="idex.php?option=banner&cat=edit&id= <?php echo $item->id; ?>">Chỉnh sửa</a> |   
                                       <a href="idex.php?option=banner&cat=show&id= <?php echo $item->id; ?>">Chi tiết</a> |
                                       <a href="idex.php?option=banner&cat=delete&id= <?php echo $item->id; ?>">Xoá</a>
                              </div>
                           </td>
                           <td>lien-ket</td>
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