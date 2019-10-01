<?php
class blog_item2Controller extends Controller {
	public function index() {
        
		return $this->load->view('common/blog_items/blog_item2', $this->data);
	}
}
?>