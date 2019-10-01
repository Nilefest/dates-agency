<?php
class blog_item3Controller extends Controller {
	public function index() {
        
		return $this->load->view('common/blog_admin_items/blog_item3', $this->data);
	}
}
?>