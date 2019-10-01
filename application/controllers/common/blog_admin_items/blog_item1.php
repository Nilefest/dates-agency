<?php
class blog_item1Controller extends Controller {
	public function index() {
        
		return $this->load->view('common/blog_admin_items/blog_item1', $this->data);
	}
}
?>