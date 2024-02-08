<?php 

$conn = mysqli_connect("localhost","root","hm0ejd74","ACLC");

if (mysqli_connect_errno()) {
    echo 'failed';
}else{
    echo 'connected';
}
