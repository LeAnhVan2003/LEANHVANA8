<?php

use App\Models\Order;
use App\Libraries\MyClass;

if(isset($_POST['THEM'])){
    $order= new Order();
    //lấy từ form
    $order->name= $_POST ['name'];
    $order->slug= (strlen($_POST['slug'])>0)? $_POST['slug']:MyClass :: str_slug($_POST['name']);
    $order->description= $_POST ['description'];
    $order->status= $_POST ['status'];

//xử lý upload file
if(strlen($_FILES['image']['name'])>0)
{
    $target_dir ="../public/images/order/";
    $target_file =$target_dir . basename($_FILES["image"]["name"]);
    $extension=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(in_array($extension,['jpg','jpeg','png','gif','webp'])){
        $filename= $order->slug .'.' . $extension;
        move_uploaded_file($_FILES['image']['tmp_name'],$target_dir . $filename);
        $order->image=$filename;
    }
}
//tự sinh ra
    $order->created_at= date('Y-m-d H:i:s');
    $order->created_by= (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1;
    
    var_dump($order);
    //lưu vào csdl
    //insert into order ...
    $order->save();
    //chuyên hướng về index
    header("location:index.php?option=order");
}