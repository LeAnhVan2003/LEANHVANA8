<?php

use App\Models\User;
use App\Libraries\MyClass;

if(isset($_POST['THEM'])){
    $user= new User();
    $user->name= $_POST ['name'];
    $user->phone= $_POST ['phone'];
    $user->email= $_POST ['email'];
    $user->username= $_POST ['username'];
    $user->password= $_POST ['password'];
    $user->roles= $_POST ['roles'];
    $user->address= $_POST ['address'];
    $user->status= $_POST ['status'];

    if(strlen($_FILES['image']['name'])>0){
        $target_dir = "../public/images/user/";
        $target_file= $target_dir . basename($_FILES["image"]["name"]);
        $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if(in_array($extension, ['jpg','jpeg','png','gif','webp']))
        {
            $filename=$user->slug.'.'.$extension;
            move_uploaded_file($_FILES['image']['tmp_name'],$target_dir . $filename);
            $user->image =$filename;
        }
    }
    //tư sinh ra
    $user->created_at = date('Y-m-d H:i:s');
    $user->created_by = (isset($_SESSION['user_id']))? $_SESSION['user_id'] : 1;
    var_dump($user);
    //luu vao csdl
    //ínet
    $user->save();
    //
    header("location:index.php?option=user");
}