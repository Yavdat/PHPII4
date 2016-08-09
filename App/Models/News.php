<?php
/**
 * Created by PhpStorm.
 * User: Yavdat
 * Date: 09.08.2016
 * Time: 16:45
 */

namespace App\Models;


use App\Model;

class News
    extends Model
{

    const TABLE='news';

    public $title;
    public $lead;
    public $author_id;

}