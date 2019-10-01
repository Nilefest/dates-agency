<?php
class blog_item5Controller extends Controller {
	public function index() {
        
		return $this->load->view('common/blog_admin_items/blog_item5', $this->data);
	}
}
?>