<?php
if(get_post_type() == "post"){
    get_template_part("templates/single/post");
}
if(get_post_type() == "project"){
    get_template_part("templates/single/project");
}
?>
