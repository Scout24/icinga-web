<?php
/**
 * BaseIcingaServiceContacts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $service_contact_id
 * @property integer $instance_id
 * @property integer $service_id
 * @property integer $contact_object_id
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIcingaServiceContacts extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $prefix = Doctrine_Manager::getInstance()->getConnectionForComponent("IcingaServiceContacts")->getPrefix();
        $this->setTableName($prefix.'service_contacts');
        $this->hasColumn('service_contact_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('instance_id', 'integer', 2, array(
             'type' => 'integer',
             'length' => 2,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('service_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('contact_object_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
 		$this->hasOne('IcingaInstances as instance', array(
	    	'local' => 'instance_id',
	    	'foreign' => 'instance_id'
		));
 		$this->hasOne('IcingaServices as service', array(
	    	'local' => 'service_id',
	    	'foreign' => 'service_id'
		));
		$this->hasOne('IcingaContacts as contact', array(
		    'local' => 'contact_object_id',
		    'foreign' => 'contact_object_id'
		));
		
		parent::setUp();
        
    }
}
