<?php

/**
 * BaseIcingaHosts
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $host_id
 * @property integer $instance_id
 * @property integer $config_type
 * @property integer $host_object_id
 * @property string $alias
 * @property string $display_name
 * @property string $address
 * @property string $address6
 * @property integer $check_command_object_id
 * @property string $check_command_args
 * @property integer $eventhandler_command_object_id
 * @property string $eventhandler_command_args
 * @property integer $notification_timeperiod_object_id
 * @property integer $check_timeperiod_object_id
 * @property string $failure_prediction_options
 * @property float $check_interval
 * @property float $retry_interval
 * @property integer $max_check_attempts
 * @property float $first_notification_delay
 * @property float $notification_interval
 * @property integer $notify_on_down
 * @property integer $notify_on_unreachable
 * @property integer $notify_on_recovery
 * @property integer $notify_on_flapping
 * @property integer $notify_on_downtime
 * @property integer $stalk_on_up
 * @property integer $stalk_on_down
 * @property integer $stalk_on_unreachable
 * @property integer $flap_detection_enabled
 * @property integer $flap_detection_on_up
 * @property integer $flap_detection_on_down
 * @property integer $flap_detection_on_unreachable
 * @property float $low_flap_threshold
 * @property float $high_flap_threshold
 * @property integer $process_performance_data
 * @property integer $freshness_checks_enabled
 * @property integer $freshness_threshold
 * @property integer $passive_checks_enabled
 * @property integer $event_handler_enabled
 * @property integer $active_checks_enabled
 * @property integer $retain_status_information
 * @property integer $retain_nonstatus_information
 * @property integer $notifications_enabled
 * @property integer $obsess_over_host
 * @property integer $failure_prediction_enabled
 * @property string $notes
 * @property string $notes_url
 * @property string $action_url
 * @property string $icon_image
 * @property string $icon_image_alt
 * @property string $vrml_image
 * @property string $statusmap_image
 * @property integer $have_2d_coords
 * @property integer $x_2d
 * @property integer $y_2d
 * @property integer $have_3d_coords
 * @property float $x_3d
 * @property float $y_3d
 * @property float $z_3d
 *
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIcingaHosts extends Doctrine_Record {
    public function setTableDefinition() {
        $prefix = Doctrine_Manager::getInstance()->getConnection(IcingaDoctrineDatabase::CONNECTION_ICINGA)->getPrefix();
        $this->setTableName($prefix.'hosts');
        $this->hasColumn('host_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
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
        $this->hasColumn('host_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => true,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('alias', 'string', 64, array(
                             'type' => 'string',
                             'length' => 64,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('display_name', 'string', 64, array(
                             'type' => 'string',
                             'length' => 64,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('address', 'string', 128, array(
                             'type' => 'string',
                             'length' => 128,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('address6', 'string', 128, array(
                             'type' => 'string',
                             'length' => 128,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('check_command_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('check_command_args', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('eventhandler_command_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('eventhandler_command_args', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notification_timeperiod_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('check_timeperiod_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('failure_prediction_options', 'string', 64, array(
                             'type' => 'string',
                             'length' => 64,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('check_interval', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('retry_interval', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('max_check_attempts', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('first_notification_delay', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notification_interval', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notify_on_down', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notify_on_unreachable', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notify_on_recovery', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notify_on_flapping', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notify_on_downtime', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('stalk_on_up', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('stalk_on_down', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('stalk_on_unreachable', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('flap_detection_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('flap_detection_on_up', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('flap_detection_on_down', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('flap_detection_on_unreachable', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('low_flap_threshold', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('high_flap_threshold', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('process_performance_data', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('freshness_checks_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('freshness_threshold', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('passive_checks_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('event_handler_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('active_checks_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('retain_status_information', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('retain_nonstatus_information', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notifications_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('obsess_over_host', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('failure_prediction_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notes', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notes_url', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('action_url', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('icon_image', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('icon_image_alt', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('vrml_image', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('statusmap_image', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('have_2d_coords', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('x_2d', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('y_2d', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('have_3d_coords', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('x_3d', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('y_3d', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('z_3d', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('IcingaObjects as object', array(
                          'local' => 'host_object_id',
                          'foreign' => 'object_id'
                      ));
        $this->hasMany("IcingaHosts as parents", array(
                           'local' => 'host_id',
                           'foreign' => 'parent_host_object_id',
                           'refClass' => 'IcingaHostParenthosts',
                           'idField' => 'host_id'
                       ));
        $this->hasMany("IcingaServices as services",array(
                           'local' => 'host_object_id',
                           'foreign' => 'host_object_id'
                       ));
        $this->hasOne("IcingaInstances as instance", array(
                          'local' => 'instance_id',
                          'foreign' => 'instance_id'
                      ));
        $this->hasMany("IcingaComments as comments", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
        $this->hasMany("IcingaCommenthistory as commenthistory", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
        $this->hasOne("IcingaHoststatus as status", array(
                          'local' => 'host_object_id',
                          'foreign' => 'host_object_id'
                      ));
        $this->hasOne("IcingaCommands as checkCommand", array(
                          'local' => 'check_command_object_id',
                          'foreign' => 'object_id'
                      ));
        $this->hasOne("IcingaCommands as eventHandlerCommand", array(
                          'local' => 'eventhandler_command_object_id',
                          'foreign' => 'object_id'
                      ));
        $this->hasMany("IcingaHostchecks as checks", array(
                           'local' => 'host_object_id',
                           'foreign' => 'host_object_id'
                       ));

        $this->hasMany("IcingaContacts as contacts", array(
                           'local'      => 'host_id',
                           'foreign'    => 'contact_object_id',
                           'refClass'   => 'IcingaHostContacts',
                           'idField' => 'host_id'
                       ));
        $this->hasMany("IcingaContactgroups as contactgroups", array(
                           'local'      => 'host_id',
                           'foreign'    => 'contactgroup_object_id',
                           'refClass' => 'IcingaHostContactgroups',
                           'idField' => 'host_id'
                       ));

        $this->hasMany("IcingaStatehistory as stateHistory", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
        $this->hasMany("IcingaHostescalations as escalations", array(
                           'local' => 'host_object_id',
                           'foreign' => 'host_object_id'
                       ));
        $this->hasMany("IcingaTimedevents as timedevents", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
        $this->hasMany("IcingaScheduleddowntime as scheduledDowntimes", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
        $this->hasMany("IcingaDowntimehistory as downtimeHistory", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
        $this->hasMany("IcingaCustomvariables as customvariables", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
        $this->hasMany("IcingaHosts as dependencies", array(
                           'local' => 'host_object_id',
                           'foreign' => 'dependent_host_object_id',
                           'refClass' => 'IcingaHostdependencies'
                       ));
        $this->hasMany("IcingaHostgroups as hostgroups", array(
                           'local' => 'host_object_id',
                           'foreign' => 'hostgroup_id',
                           'refClass' => 'IcingaHostgroupMembers'
                       ));
        $this->hasMany("IcingaNotifications as notification", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
        $this->hasMany("IcingaAcknowledgements as acknowledgements", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));

        $this->hasOne("IcingaTimeperiods as notificationTimeperiod", array(
                          'local' => 'notification_timeperiod_object_id',
                          'foreign' => 'timeperiod_object_id',
                      ));
        $this->hasOne("IcingaTimeperiods as checkTimeperiod", array(
                          'local' => 'check_timeperiod_object_id',
                          'foreign' => 'timeperiod_object_id',
                      ));
        $this->hasMany("IcingaCustomvariablestatus as customvariablestatus", array(
                           'local' => 'host_object_id',
                           'foreign' => 'object_id'
                       ));
    }
}
