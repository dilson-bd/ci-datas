$this->db->distinct();
$this->db->select("club_id")
$this->db->limit($limit);
$this->db->where("UNIX_TIMESTAMP(`end_date`) > ".time());
$q = $this->db->get('offers');