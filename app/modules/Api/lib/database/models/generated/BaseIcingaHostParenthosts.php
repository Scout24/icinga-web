<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('IcingaHostParenthosts', 'default');

/**
 * BaseIcingaHostParenthosts
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $host_parenthost_id
 * @property integer $instance_id
 * @property integer $host_id
 * @property integer $parent_host_object_id
 *
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIcingaHostParenthosts extends Doctrine_Record {
    public function setTableDefinition() {
        $prefix = Doctrine_Manager::getInstance()->getConnectionForComponent("IcingaHostParenthosts")->getPrefix();
        $this->setTableName($prefix.'host_parenthosts');
        $this->hasColumn('host_parenthost_id', 'integer', 4, array(
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
        $this->hasColumn('host_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('parent_host_object_id', 'integer', 4, array(
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

    public function setUp() {
        $this->hasOne('IcingaInstances as instance', array(
                          'local' => 'instance_id',
                          'foreign' => 'instance_id'
                      ));

        $this->hasOne('IcingaHosts as hosts', array(
                          'local' => 'host_id',
                          'foreign' => 'host_id'
                      ));

        $this->hasOne('IcingaHosts as parent', array(
                          'local' => 'parent_host_object_id',
                          'foreign' => 'host_id'
                      ));


        parent::setUp();

    }
}
