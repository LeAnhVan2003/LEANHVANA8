<?php

use App\Models\Topic;

$id = $_REQUEST['id'];
$topic = Topic::find($id);
if($topic==null){
    header("location:index.php?option=topic&cat=trash");
}
$topic->delete();// xóa vv
header("location:index.php?option=topic&cat=trash");