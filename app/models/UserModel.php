<?php
class UsersModel extends Model
{
    protected $table = 'users';

    public function get_user_by_id($id)
    {
        return $this->db->table($this->table)
                        ->where('id', $id)
                        ->get();
    }

    public function get_all_users()
    {
        return $this->db->table($this->table)->get_all();
    }

    public function insert($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update($id, $data)
    {
        return $this->db->table($this->table)
                        ->where('id', $id)
                        ->update($data);
    }

    public function delete($id)
    {
        return $this->db->table($this->table)
                        ->where('id', $id)
                        ->delete();
    }

    public function find($id)
    {
        return $this->db->table($this->table)
                        ->where('id', $id)
                        ->get();
    }

    // Para sa pagination ng UsersController
    public function page($q, $limit, $page)
    {
        $offset = ($page - 1) * $limit;

        $builder = $this->db->table($this->table);
        if (!empty($q)) {
            $builder->like('first_name', $q)
                    ->or_like('last_name', $q)
                    ->or_like('email', $q);
        }

        $records = $builder->limit($limit, $offset)->get_all();

        // Count total rows para sa pagination
        $builder = $this->db->table($this->table);
        if (!empty($q)) {
            $builder->like('first_name', $q)
                    ->or_like('last_name', $q)
                    ->or_like('email', $q);
        }
        $total_rows = $builder->count();

        return [
            'records' => $records,
            'total_rows' => $total_rows
        ];
    }
}
?>
