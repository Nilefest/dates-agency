<?php
class manModel extends Model {
    
    public function addNew($data = []){        
        $sql = "UPDATE `user` SET `login` = '" . $login . "', `password` = '" . $password . "' WHERE `id` = " . $user_id;
        //$this->query($sql);
        return $sql;
    }
    
    public function getAll($id){        
        $sql = "SELECT * FROM `user` WHERE `meeting_id` = '-1' ORDER BY `login` ASC";
        //$query = $this->db->query($sql);
		return $query;
    }
}
?>
