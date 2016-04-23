<?php
//Trechos estão sem nexos, pois é apenas anotação para ser revista no futuro por mim OK.
$this->db->distinct();
$this->db->select("club_id")
$this->db->limit($limit);
$this->db->where("UNIX_TIMESTAMP(`end_date`) > ".time());
$q = $this->db->get('offers');

//Outro fragmento para ser estudado
 $this->db->select('*');
    $this->db->select("DATE_FORMAT( date, '%d.%m.%Y' ) as date_human",  FALSE );
    $this->db->select("DATE_FORMAT( date, '%H:%i') as time_human",      FALSE );


    $this->db->from('news');

    $this->db->where('news_id', $news_id );
