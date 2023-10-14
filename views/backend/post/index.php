<?php
use App\Models\Post;
$list = Post::all();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả bài viết</h1>
                     <a href="index.php?option=post&cat=create" class="btn btn-sm btn-primary">Thêm bài viết</a>
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
                           <th>Tiêu đề bài viết</th>
                           <th>Tên danh mục</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php foreach($list as $item) : ?>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                              <img src="../public/images/post/<?php echo $item->image; ?>" alt="<?php echo $item->image; ?>">
                           </td>
                           <td>
                              <div class="name">
                              <?php echo $item->name; ?>
                              </div>
                              <div class="function_style">
                              <?php if($item->status==1):?>
                                          <a class="text-success" href="idex.php?option=post&cat=status">Hiện</a> |
                                       <?php else:?>
                                          <a class="text-danger" href="idex.php?option=post&cat=status&id= <?php echo $item->id; ?>">Ẩn</a> |
                                       <?php endif;?>
                                       <a href="idex.php?option=post&cat=edit&id= <?php echo $item->id; ?>">Chỉnh sửa</a> |   
                                       <a href="idex.php?option=post&cat=show&id= <?php echo $item->id; ?>">Chi tiết</a> |
                                       <a href="idex.php?option=post&cat=delete&id= <?php echo $item->id; ?>">Xoá</a>
                              </div>
                           </td>
                           <td>Tên chủ đề</td>
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