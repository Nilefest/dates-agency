<?php
class headerController extends Controller {

	public function index() {
        
        // All
        if(isset($this->request->post['sub_contact_us'])){
            //echo 'sub_contact_us';
            //$this->pre($this->request->post);
            $this->load->library('mail');
            $mail = new mailLibrary($this->config->mail_host, 
                                    $this->config->mail_port, 
                                    $this->config->mail_login, 
                                    $this->config->mail_password, 
                                    $this->config->mail_sender);
            $title = 'KDA Contact us ' . date('d.m.Y ') . ' - ' . time();
            $body = 'KDA Contact us<br>'
                . 'Name: ' . $this->request->post['name'] 
                . ' <br>Mail: ' . $this->request->post['mail'] 
                . ' <br>Text: ' . $this->request->post['text'];
            $to_name = 'Administrator KDA';
            $to_mail = $this->config->mail_admin;
            $unsub_link = $this->config->mail_unsub_link;
            $file = [];

            $mail->send_smtp($title, 
                             $body, 
                             $to_name, 
                             $to_mail, 
                             $unsub_link, 
                             $file);/**/
        }
        
        $this->data['title'] = $this->config->title . ' | ' . $this->config->site_name;

        $this->data['site_name'] = $this->config->site_name;
        $this->data['description'] = $this->config->meta_description;
        $this->data['keywords'] = $this->config->meta_keywords;

        $this->data['css'] = $this->config->custom_css;

		return $this->load->view('common/header', $this->data);
	}
}
?>