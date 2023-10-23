<?php

use App\Models\Contact;

$id = $_REQUEST['id'];
$contact =  Contact::find($id);
if($contact==null){
    header("location:index.php?option=contact");
}
//
$contact->delete();// xóa vv
header("location:index.php?option=contact&cat=trash");