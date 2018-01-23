<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 1/22/18
 * Time: 10:08 PM
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class UserAdmin
 *
 * @package AppBundle\Entity
 *
 *
 * @ORM\Entity
 * @ORM\Table(name="user_admin")
 *
 */
class UserAdmin extends BaseUser
{

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}