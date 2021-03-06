<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GcrAutoLogin', 'doctrine');

/**
 * BaseGcrAutoLogin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $app_id
 * @property string $user_password
 * @property string $user_token
 * @property string $username
 * @property integer $expire
 * 
 * @method integer      getId()            Returns the current record's "id" value
 * @method string       getAppId()         Returns the current record's "app_id" value
 * @method string       getUserPassword()  Returns the current record's "user_password" value
 * @method string       getUserToken()     Returns the current record's "user_token" value
 * @method string       getUsername()      Returns the current record's "username" value
 * @method integer      getExpire()        Returns the current record's "expire" value
 * @method GcrAutoLogin setId()            Sets the current record's "id" value
 * @method GcrAutoLogin setAppId()         Sets the current record's "app_id" value
 * @method GcrAutoLogin setUserPassword()  Sets the current record's "user_password" value
 * @method GcrAutoLogin setUserToken()     Sets the current record's "user_token" value
 * @method GcrAutoLogin setUsername()      Sets the current record's "username" value
 * @method GcrAutoLogin setExpire()        Sets the current record's "expire" value
 * 
 * @package    globalclassroom
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGcrAutoLogin extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gcr_auto_login');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'gcr_auto_login_id',
             'length' => 8,
             ));
        $this->hasColumn('app_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('user_password', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('user_token', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('username', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('expire', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '0',
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}