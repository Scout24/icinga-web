<?php
// Connection Component Binding


/**
 * BaseIcingaHostgroups
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $hostgroup_id
 * @property integer $instance_id
 * @property integer $config_type
 * @property integer $hostgroup_object_id
 * @property string $alias
 *
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIcingaHostgroups extends Doctrine_Record {
    public function setTableDefinition() {
        $prefix = Doctrine_Manager::getInstance()->getConnectionForComponent("IcingaHostgroups")->getPrefix();
        $this->setTableName($prefix.'hostgroups');
        $this->hasColumn('hostgroup_id', 'integer', 4, array(
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
        $this->hasColumn('config_type', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('hostgroup_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('alias', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
    }

    public function setUp() {
        $this->hasOne('IcingaInstances as instance', array(
                          'local' => 'instance_id',
                          'foreign' => 'instance_id'
                      ));


        $this->hasMany("IcingaHosts as members", array(
                           'local' => 'hostgroup_id',
                           'foreign' => 'host_object_id',
                           'refClass' => 'IcingaHostgroupMembers'
                       ));

        $this->hasOne('IcingaObjects as object', array(
            'local' => 'hostgroup_object_id',
            'foreign' => 'object_id'
        ));
        parent::setUp();

    }
}
