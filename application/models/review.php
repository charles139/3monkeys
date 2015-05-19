<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Model {

	public function add_user($user) {
		$query = "INSERT users (email, password, created_at) VALUES (?,?,?)";
		$values = array($user['email'], $user['password'], date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}
	public function get_user($user) {
		$query = $this->db->query('SELECT * FROM users WHERE email = ? AND password = ?', array($user['email'], $user['password']));
		return $query->row_array();
	}
	public function add_review($review)
	{
		$query = "INSERT INTO reviews (id, user_id, movie_id, rating, comments) VALUE (?,?,?,?,?)" ;
		$values = array($review['id'], $review['user_id'],  $review['movie_id'], $review['rating'], $review['comments']);
		return $this->db->query($query, $values);
	}
	public function get_review()
	{
		$query = $this->db->query('SELECT * FROM reviews.reviews')->row_array();
		return $query;
	}

}