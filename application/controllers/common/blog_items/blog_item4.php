<?php
class blog_item4Controller extends Controller {
	public function index() {
        
		return $this->load->view('common/blog_items/blog_item4', $this->data);
	}
}
?>