<?php
function page($page_id) { 
   $ci = get_instance();
   $resp = $ci->db->query("SELECT * FROM `page` WHERE `page_id` = '$page_id';");
   $resp = $resp->result_array();
   $final['meta_title'] = $resp[0]['meta_title'];
   $final['meta_key'] = $resp[0]['meta_key'];
   $final['meta_desc'] = $resp[0]['meta_desc'];
   $final['page_title'] = $resp[0]['title'];
   $final['page_short_description'] = $resp[0]['short_description'];
   $final['page_detail'] = $resp[0]['detail'];
   $final['page_image'] = $resp[0]['image'];
   return $final;
} 