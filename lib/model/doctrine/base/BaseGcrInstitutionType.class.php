<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GcrInstitutionType', 'doctrine');

/**
 * BaseGcrInstitutionType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $template
 * @property integer $eschool_type_id
 * @property boolean $is_public
 * 
 * @method integer            getId()              Returns the current record's "id" value
 * @method string             getName()            Returns the current record's "name" value
 * @method string             getTemplate()        Returns the current record's "template" value
 * @method integer            getEschoolTypeId()   Returns the current record's "eschool_type_id" value
 * @method boolean            getIsPublic()        Returns the current record's "is_public" value
 * @method GcrInstitutionType setId()              Sets the current record's "id" value
 * @method GcrInstitutionType setName()            Sets the current record's "name" value
 * @method GcrInstitutionType setTemplate()        Sets the current record's "template" value
 * @method GcrInstitutionType setEschoolTypeId()   Sets the current record's "eschool_type_id" value
 * @method GcrInstitutionType setIsPublic()        Sets the current record's "is_public" value
 * 
 * @package    globalclassroom
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGcrInstitutionType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gcr_institution_type');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'gcr_institution_type_id',
             'length' => 8,
             ));
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '100',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('template', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '',
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('eschool_type_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_public', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'false',
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}