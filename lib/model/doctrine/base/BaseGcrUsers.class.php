<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GcrUsers', 'doctrine');

/**
 * BaseGcrInstitutionCatalogCourses
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $institution_short_name
 * @property string $catalog_short_name
 * @property integer $courses_count
 * 
 * @method integer    getId()      Returns the current record's "id" value
 * @method string     getInstitutionShortName() Returns the current record's "institution_short_name" value
 * @method string     getCatalogShortName() Returns the current record's "catalog_short_name" value
 * @method string     getCoursesCount() Returns the current record's "courses_count" value
 * @method GcrInstitutionCatalogCourses setId()      Sets the current record's "id" value
 * @method GcrInstitutionCatalogCourses setInstitutionShortName() Sets the current record's "institution_short_name" value
 * @method GcrInstitutionCatalogCourses setCatalogShortName() Sets the current record's "catalog_short_name" value
 * @method GcrInstitutionCatalogCourses setCoursesCount() Sets the current record's "courses_count" value
 * 
 * @package    globalclassroom
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGcrUsers extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gcr_users');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'gcr_users_id',
             'length' => 8,
             ));
        $this->hasColumn('platform_short_name', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));			 
        $this->hasColumn('username', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('user_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => 8,
             ));
        $this->hasColumn('state', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('country', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => false,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));			 
        $this->hasColumn('created_datetime', 'timestamp', null, array(
             'type' => 'timestamp',
             'fixed' => false,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}