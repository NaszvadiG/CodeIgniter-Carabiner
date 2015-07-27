<?php 

function submit($title = "Title", $url = "Slug", $displayResult = FALSE) {
    $ci = &get_instance();
    $result = TRUE;
    $ci->load->library('xmlrpc');

    $services = $ci->db->query("SELECT * FROM mt_updateservices")->result_array();
    $check_log = $ci->db->query("SELECT * FROM mt_updatelogs WHERE url='" . $url . "'")->result_array();
	$serverResponseCode =0;
	$serverResponseMsg =0;
	
	foreach ($services as $value) :
            $ci->xmlrpc->server($value['url'], 80);
            $ci->xmlrpc->method('weblogUpdates.ping');
            $request = array($title, $url);
            $ci->xmlrpc->request($request);
			
			if (!$ci->xmlrpc->send_request()) {
				$serverResponseCode = $ci->xmlrpc->display_response()['flerror'];
				$serverResponseMsg = $ci->xmlrpc->display_response()['message'];
			
                if ($displayResult) {
                    $result = $serverResponseMsg . "<br/>";
                } else {
                    $result = FALSE;
                }
            } else {
				$serverResponseCode = $ci->xmlrpc->display_response()['flerror'];
				$serverResponseMsg = $ci->xmlrpc->display_response()['message'];
				
                $sql = "INSERT INTO mt_updatelogs (update_id,submit_date, result, url) VALUES ";
                $sql .= "('" . $value["id"] . "','" . date("Y-m-d") . "','" . $serverResponseMsg . "','" . $url . "')";
                $ci->db->query($sql);
                
				if ($displayResult) {
                    $result = $serverResponseMsg . "<br/>";
                } else {
                    $result = FALSE;
                }
            }
			echo $value['url'].' = '.$result."<br/>";
        endforeach;
    return $result;
}
?>