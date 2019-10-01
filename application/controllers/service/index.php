<?php
class indexController extends Controller {
    
	public function index() {
        
        // Service
        if(isset($this->request->post['sub_order'])){
            
            $this->load->library('mail');
            $mail = new mailLibrary($this->config->mail_host, 
                                    $this->config->mail_port, 
                                    $this->config->mail_login, 
                                    $this->config->mail_password, 
                                    $this->config->mail_sender);
            


            
            
            
            
            $title = 'KDA Order VIP' . date('d.m.Y ') . ' - ' . time();
            
            $body = 'KDA Order VIP<br>'
                . 'Name: ' . $this->request->post['name'] 
                . ' <br>Mail: ' . $this->request->post['mail'] 
                . ' <br>Phone: ' . $this->request->post['phone'];
            
            $to_name = 'Administrator KDA';
            $to_mail = 'nikitaleo777333@gmail.com';
            $unsub_link = $this->mail_unsub_link;
            $file = [];

            $mail->send_smtp($title, 
                             $body, 
                             $to_name, 
                             $to_mail, 
                             $unsub_link, 
                             $file);/**/
            $this->response->redirect($this->config->page_for_pay);
            exit();
        }
        
        // Open page
        $this->config->title = "Our service";
        $this->config->meta_description = "Dates and matchmaking with ukrainian beautiful brides in Kiev and other cities in Ukraine";
        $this->config->meta_keywords = "ukraine women for marriage, single women in ukraine,best ukrainian dating sites,meeting ukrainian ladies,kiev brides,Slavic girls marry,ukrainian single ladies,ukraine women online,meet ukrainian girl,real ukrainian dating site,ukraine girl dating site,ukrainian woman dating,kiev dating site,ukrainian online dating";
		$this->getChild(array('common/header', 'common/nav', 'common/footer'));
		return $this->load->view('service/index', $this->data);
	}
}
?>
