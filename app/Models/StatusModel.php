<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table = 'status';

    protected $primaryKey = 'status_id';

	protected $allowedFields = ['nome'];
}
?>