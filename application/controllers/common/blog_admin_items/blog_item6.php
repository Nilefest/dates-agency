<?php
class blog_item6Controller extends Controller {
	public function index() {
        
		return $this->load->view('common/blog_admin_items/blog_item6', $this->data);
	}
}
?>