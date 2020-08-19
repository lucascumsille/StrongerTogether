<?php 
   get_header();
$object = get_queried_object();
echo $object->name;
    get_footer(); 
?>