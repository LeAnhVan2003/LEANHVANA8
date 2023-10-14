<?php
use App\Models\User;
$list = User::all();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả thành viên</h1>
                     <a href="index.php?option=user&cat=create" class="btn btn-sm btn-primary">Thêm thành viên</a>
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
                           <th>Địa chỉ</th>
                           <th>Vai trò</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php foreach($list as $item) : ?>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                              <img src="../public/images/user/<?php echo $item->image; ?>" alt="<?php echo $item->image; ?>">
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
                           <td><?php echo $item->phone; ?></td>
                           <td><?php echo $item->email; ?></td>
                           <td><?php echo $item->address; ?></td>
                           <td><?php echo $item->roles; ?></td>
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