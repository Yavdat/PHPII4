<?php
/**
 * Created by PhpStorm.
 * User: Yavdat
 * Date: 09.08.2016
 * Time: 16:45
 */

namespace App\Models;


use App\Model;

/**
 * Class News
 * @package App\Models
 * 
 * @property \App\Models\Author $author
 */
class News
    extends Model
{

    const TABLE='news';

    public $title;
    public $lead;
    public $author_id;

    /**
     * LAZY LOAD
     *
     * @param $k
     * @return null
     */
    
    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }
    }


}