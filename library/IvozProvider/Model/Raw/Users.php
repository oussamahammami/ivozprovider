<?php

/**
 * Application Model
 *
 * @package IvozProvider\Model\Raw
 * @subpackage Model
 * @author Luis Felipe Garcia
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * [entity]
 *
 * @package IvozProvider\Model
 * @subpackage Model
 * @author Luis Felipe Garcia
 */

namespace IvozProvider\Model\Raw;
class Users extends ModelAbstract
{


    /**
     * Database var type int
     *
     * @var int
     */
    protected $_id;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_companyId;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_name;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_lastname;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_email;

    /**
     * [password]
     * Database var type varchar
     *
     * @var string
     */
    protected $_pass;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_timezoneId;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_terminalId;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_extensionId;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_outgoingDDIId;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_callACLId;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_doNotDisturb;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_isBoss;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_bossAssistantId;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_exceptionBoosAssistantRegExp;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_username;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_active;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_maxCalls;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_callWaiting;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_attachVoicemailSound;

    /**
     * Database var type tinyint
     *
     * @var int
     */
    protected $_voicemailEnabled;

    /**
     * Database var type varchar
     *
     * @var string
     */
    protected $_tokenKey;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_countryId;


    /**
     * Parent relation Users_ibfk_1
     *
     * @var \IvozProvider\Model\Raw\Companies
     */
    protected $_Company;

    /**
     * Parent relation Users_ibfk_10
     *
     * @var \IvozProvider\Model\Raw\CallACL
     */
    protected $_CallACL;

    /**
     * Parent relation Users_ibfk_11
     *
     * @var \IvozProvider\Model\Raw\Users
     */
    protected $_BossAssistant;

    /**
     * Parent relation Users_ibfk_12
     *
     * @var \IvozProvider\Model\Raw\Countries
     */
    protected $_Country;

    /**
     * Parent relation Users_ibfk_3
     *
     * @var \IvozProvider\Model\Raw\Terminals
     */
    protected $_Terminal;

    /**
     * Parent relation Users_ibfk_7
     *
     * @var \IvozProvider\Model\Raw\Extensions
     */
    protected $_Extension;

    /**
     * Parent relation Users_ibfk_8
     *
     * @var \IvozProvider\Model\Raw\Timezones
     */
    protected $_Timezone;

    /**
     * Parent relation Users_ibfk_9
     *
     * @var \IvozProvider\Model\Raw\DDIs
     */
    protected $_OutgoingDDI;


    /**
     * Dependent relation CallForwardSettings_ibfk_1
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\CallForwardSettings[]
     */
    protected $_CallForwardSettingsByUser;

    /**
     * Dependent relation CallForwardSettings_ibfk_3
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\CallForwardSettings[]
     */
    protected $_CallForwardSettingsByVoiceMailUser;

    /**
     * Dependent relation DDIs_ibfk_3
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\DDIs[]
     */
    protected $_DDIs;

    /**
     * Dependent relation ExternalCallFilters_ibfk_7
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\ExternalCallFilters[]
     */
    protected $_ExternalCallFiltersByHolidayVoiceMailUser;

    /**
     * Dependent relation ExternalCallFilters_ibfk_8
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\ExternalCallFilters[]
     */
    protected $_ExternalCallFiltersByOutOfScheduleVoiceMailUser;

    /**
     * Dependent relation HuntGroupCallForwardSettings_ibfk_3
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\HuntGroupCallForwardSettings[]
     */
    protected $_HuntGroupCallForwardSettings;

    /**
     * Dependent relation HuntGroupsRelUsers_ibfk_2
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\HuntGroupsRelUsers[]
     */
    protected $_HuntGroupsRelUsers;

    /**
     * Dependent relation IVRCommon_ibfk_8
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\IVRCommon[]
     */
    protected $_IVRCommonByTimeoutVoiceMailUser;

    /**
     * Dependent relation IVRCommon_ibfk_9
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\IVRCommon[]
     */
    protected $_IVRCommonByErrorVoiceMailUser;

    /**
     * Dependent relation IVRCustom_ibfk_8
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\IVRCustom[]
     */
    protected $_IVRCustomByTimeoutVoiceMailUser;

    /**
     * Dependent relation IVRCustom_ibfk_9
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\IVRCustom[]
     */
    protected $_IVRCustomByErrorVoiceMailUser;

    /**
     * Dependent relation IVRCustomEntries_ibfk_4
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\IVRCustomEntries[]
     */
    protected $_IVRCustomEntries;

    /**
     * Dependent relation PickUpRelUsers_ibfk_2
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\PickUpRelUsers[]
     */
    protected $_PickUpRelUsers;

    /**
     * Dependent relation Users_ibfk_11
     * Type: One-to-Many relationship
     *
     * @var \IvozProvider\Model\Raw\Users[]
     */
    protected $_Users;

    protected $_columnsList = array(
        'id'=>'id',
        'companyId'=>'companyId',
        'name'=>'name',
        'lastname'=>'lastname',
        'email'=>'email',
        'pass'=>'pass',
        'timezoneId'=>'timezoneId',
        'terminalId'=>'terminalId',
        'extensionId'=>'extensionId',
        'outgoingDDIId'=>'outgoingDDIId',
        'callACLId'=>'callACLId',
        'doNotDisturb'=>'doNotDisturb',
        'isBoss'=>'isBoss',
        'bossAssistantId'=>'bossAssistantId',
        'exceptionBoosAssistantRegExp'=>'exceptionBoosAssistantRegExp',
        'username'=>'username',
        'active'=>'active',
        'maxCalls'=>'maxCalls',
        'callWaiting'=>'callWaiting',
        'attachVoicemailSound'=>'attachVoicemailSound',
        'voicemailEnabled'=>'voicemailEnabled',
        'tokenKey'=>'tokenKey',
        'countryId'=>'countryId',
    );

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        $this->setColumnsMeta(array(
            'pass'=> array('password'),
        ));

        $this->setMultiLangColumnsList(array(
        ));

        $this->setAvailableLangs(array('es', 'en'));

        $this->setParentList(array(
            'UsersIbfk1'=> array(
                    'property' => 'Company',
                    'table_name' => 'Companies',
                ),
            'UsersIbfk10'=> array(
                    'property' => 'CallACL',
                    'table_name' => 'CallACL',
                ),
            'UsersIbfk11'=> array(
                    'property' => 'BossAssistant',
                    'table_name' => 'Users',
                ),
            'UsersIbfk12'=> array(
                    'property' => 'Country',
                    'table_name' => 'Countries',
                ),
            'UsersIbfk3'=> array(
                    'property' => 'Terminal',
                    'table_name' => 'Terminals',
                ),
            'UsersIbfk7'=> array(
                    'property' => 'Extension',
                    'table_name' => 'Extensions',
                ),
            'UsersIbfk8'=> array(
                    'property' => 'Timezone',
                    'table_name' => 'Timezones',
                ),
            'UsersIbfk9'=> array(
                    'property' => 'OutgoingDDI',
                    'table_name' => 'DDIs',
                ),
        ));

        $this->setDependentList(array(
            'CallForwardSettingsIbfk1' => array(
                    'property' => 'CallForwardSettingsByUser',
                    'table_name' => 'CallForwardSettings',
                ),
            'CallForwardSettingsIbfk3' => array(
                    'property' => 'CallForwardSettingsByVoiceMailUser',
                    'table_name' => 'CallForwardSettings',
                ),
            'DDIsIbfk3' => array(
                    'property' => 'DDIs',
                    'table_name' => 'DDIs',
                ),
            'ExternalCallFiltersIbfk7' => array(
                    'property' => 'ExternalCallFiltersByHolidayVoiceMailUser',
                    'table_name' => 'ExternalCallFilters',
                ),
            'ExternalCallFiltersIbfk8' => array(
                    'property' => 'ExternalCallFiltersByOutOfScheduleVoiceMailUser',
                    'table_name' => 'ExternalCallFilters',
                ),
            'HuntGroupCallForwardSettingsIbfk3' => array(
                    'property' => 'HuntGroupCallForwardSettings',
                    'table_name' => 'HuntGroupCallForwardSettings',
                ),
            'HuntGroupsRelUsersIbfk2' => array(
                    'property' => 'HuntGroupsRelUsers',
                    'table_name' => 'HuntGroupsRelUsers',
                ),
            'IVRCommonIbfk8' => array(
                    'property' => 'IVRCommonByTimeoutVoiceMailUser',
                    'table_name' => 'IVRCommon',
                ),
            'IVRCommonIbfk9' => array(
                    'property' => 'IVRCommonByErrorVoiceMailUser',
                    'table_name' => 'IVRCommon',
                ),
            'IVRCustomIbfk8' => array(
                    'property' => 'IVRCustomByTimeoutVoiceMailUser',
                    'table_name' => 'IVRCustom',
                ),
            'IVRCustomIbfk9' => array(
                    'property' => 'IVRCustomByErrorVoiceMailUser',
                    'table_name' => 'IVRCustom',
                ),
            'IVRCustomEntriesIbfk4' => array(
                    'property' => 'IVRCustomEntries',
                    'table_name' => 'IVRCustomEntries',
                ),
            'PickUpRelUsersIbfk2' => array(
                    'property' => 'PickUpRelUsers',
                    'table_name' => 'PickUpRelUsers',
                ),
            'UsersIbfk11' => array(
                    'property' => 'Users',
                    'table_name' => 'Users',
                ),
        ));

        $this->setOnDeleteCascadeRelationships(array(
            'CallForwardSettings_ibfk_1',
            'CallForwardSettings_ibfk_3',
            'HuntGroupCallForwardSettings_ibfk_3',
            'HuntGroupsRelUsers_ibfk_2',
            'PickUpRelUsers_ibfk_2'
        ));

        $this->setOnDeleteSetNullRelationships(array(
            'DDIs_ibfk_3',
            'ExternalCallFilters_ibfk_7',
            'ExternalCallFilters_ibfk_8',
            'IVRCommon_ibfk_8',
            'IVRCommon_ibfk_9',
            'IVRCustom_ibfk_8',
            'IVRCustom_ibfk_9',
            'IVRCustomEntries_ibfk_4',
            'Users_ibfk_11'
        ));


        $this->_defaultValues = array(
            'doNotDisturb' => '0',
            'isBoss' => '0',
            'maxCalls' => '2',
            'callWaiting' => '0',
            'attachVoicemailSound' => '1',
            'voicemailEnabled' => '1',
        );

        $this->_initFileObjects();
        parent::__construct();
    }

    /**
     * This method is called just after parent's constructor
     */
    public function init()
    {
    }
    /**************************************************************************
    ************************** File System Object (FSO)************************
    ***************************************************************************/

    protected function _initFileObjects()
    {

        return $this;
    }

    public function getFileObjects()
    {

        return array();
    }


    /**************************************************************************
    *********************************** /FSO ***********************************
    ***************************************************************************/

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setId($data)
    {

        if ($this->_id != $data) {
            $this->_logChange('id');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_id = $data;

        } else if (!is_null($data)) {
            $this->_id = (int) $data;

        } else {
            $this->_id = $data;
        }
        return $this;
    }

    /**
     * Gets column id
     *
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCompanyId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_companyId != $data) {
            $this->_logChange('companyId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_companyId = $data;

        } else if (!is_null($data)) {
            $this->_companyId = (int) $data;

        } else {
            $this->_companyId = $data;
        }
        return $this;
    }

    /**
     * Gets column companyId
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->_companyId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setName($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_name != $data) {
            $this->_logChange('name');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_name = $data;

        } else if (!is_null($data)) {
            $this->_name = (string) $data;

        } else {
            $this->_name = $data;
        }
        return $this;
    }

    /**
     * Gets column name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setLastname($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_lastname != $data) {
            $this->_logChange('lastname');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_lastname = $data;

        } else if (!is_null($data)) {
            $this->_lastname = (string) $data;

        } else {
            $this->_lastname = $data;
        }
        return $this;
    }

    /**
     * Gets column lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setEmail($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_email != $data) {
            $this->_logChange('email');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_email = $data;

        } else if (!is_null($data)) {
            $this->_email = (string) $data;

        } else {
            $this->_email = $data;
        }
        return $this;
    }

    /**
     * Gets column email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setPass($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_pass != $data) {
            $this->_logChange('pass');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_pass = $data;

        } else if (!is_null($data)) {
            $this->_pass = (string) $data;

        } else {
            $this->_pass = $data;
        }
        return $this;
    }

    /**
     * Gets column pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->_pass;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setTimezoneId($data)
    {

        if ($this->_timezoneId != $data) {
            $this->_logChange('timezoneId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_timezoneId = $data;

        } else if (!is_null($data)) {
            $this->_timezoneId = (int) $data;

        } else {
            $this->_timezoneId = $data;
        }
        return $this;
    }

    /**
     * Gets column timezoneId
     *
     * @return int
     */
    public function getTimezoneId()
    {
        return $this->_timezoneId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setTerminalId($data)
    {

        if ($this->_terminalId != $data) {
            $this->_logChange('terminalId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_terminalId = $data;

        } else if (!is_null($data)) {
            $this->_terminalId = (int) $data;

        } else {
            $this->_terminalId = $data;
        }
        return $this;
    }

    /**
     * Gets column terminalId
     *
     * @return int
     */
    public function getTerminalId()
    {
        return $this->_terminalId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setExtensionId($data)
    {

        if ($this->_extensionId != $data) {
            $this->_logChange('extensionId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_extensionId = $data;

        } else if (!is_null($data)) {
            $this->_extensionId = (int) $data;

        } else {
            $this->_extensionId = $data;
        }
        return $this;
    }

    /**
     * Gets column extensionId
     *
     * @return int
     */
    public function getExtensionId()
    {
        return $this->_extensionId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setOutgoingDDIId($data)
    {

        if ($this->_outgoingDDIId != $data) {
            $this->_logChange('outgoingDDIId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_outgoingDDIId = $data;

        } else if (!is_null($data)) {
            $this->_outgoingDDIId = (int) $data;

        } else {
            $this->_outgoingDDIId = $data;
        }
        return $this;
    }

    /**
     * Gets column outgoingDDIId
     *
     * @return int
     */
    public function getOutgoingDDIId()
    {
        return $this->_outgoingDDIId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCallACLId($data)
    {

        if ($this->_callACLId != $data) {
            $this->_logChange('callACLId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_callACLId = $data;

        } else if (!is_null($data)) {
            $this->_callACLId = (int) $data;

        } else {
            $this->_callACLId = $data;
        }
        return $this;
    }

    /**
     * Gets column callACLId
     *
     * @return int
     */
    public function getCallACLId()
    {
        return $this->_callACLId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setDoNotDisturb($data)
    {

        if ($this->_doNotDisturb != $data) {
            $this->_logChange('doNotDisturb');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_doNotDisturb = $data;

        } else if (!is_null($data)) {
            $this->_doNotDisturb = (int) $data;

        } else {
            $this->_doNotDisturb = $data;
        }
        return $this;
    }

    /**
     * Gets column doNotDisturb
     *
     * @return int
     */
    public function getDoNotDisturb()
    {
        return $this->_doNotDisturb;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setIsBoss($data)
    {

        if ($this->_isBoss != $data) {
            $this->_logChange('isBoss');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_isBoss = $data;

        } else if (!is_null($data)) {
            $this->_isBoss = (int) $data;

        } else {
            $this->_isBoss = $data;
        }
        return $this;
    }

    /**
     * Gets column isBoss
     *
     * @return int
     */
    public function getIsBoss()
    {
        return $this->_isBoss;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setBossAssistantId($data)
    {

        if ($this->_bossAssistantId != $data) {
            $this->_logChange('bossAssistantId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_bossAssistantId = $data;

        } else if (!is_null($data)) {
            $this->_bossAssistantId = (int) $data;

        } else {
            $this->_bossAssistantId = $data;
        }
        return $this;
    }

    /**
     * Gets column bossAssistantId
     *
     * @return int
     */
    public function getBossAssistantId()
    {
        return $this->_bossAssistantId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setExceptionBoosAssistantRegExp($data)
    {

        if ($this->_exceptionBoosAssistantRegExp != $data) {
            $this->_logChange('exceptionBoosAssistantRegExp');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_exceptionBoosAssistantRegExp = $data;

        } else if (!is_null($data)) {
            $this->_exceptionBoosAssistantRegExp = (string) $data;

        } else {
            $this->_exceptionBoosAssistantRegExp = $data;
        }
        return $this;
    }

    /**
     * Gets column exceptionBoosAssistantRegExp
     *
     * @return string
     */
    public function getExceptionBoosAssistantRegExp()
    {
        return $this->_exceptionBoosAssistantRegExp;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setUsername($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_username != $data) {
            $this->_logChange('username');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_username = $data;

        } else if (!is_null($data)) {
            $this->_username = (string) $data;

        } else {
            $this->_username = $data;
        }
        return $this;
    }

    /**
     * Gets column username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setActive($data)
    {

        if ($this->_active != $data) {
            $this->_logChange('active');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_active = $data;

        } else if (!is_null($data)) {
            $this->_active = (int) $data;

        } else {
            $this->_active = $data;
        }
        return $this;
    }

    /**
     * Gets column active
     *
     * @return int
     */
    public function getActive()
    {
        return $this->_active;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setMaxCalls($data)
    {

        if ($this->_maxCalls != $data) {
            $this->_logChange('maxCalls');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_maxCalls = $data;

        } else if (!is_null($data)) {
            $this->_maxCalls = (int) $data;

        } else {
            $this->_maxCalls = $data;
        }
        return $this;
    }

    /**
     * Gets column maxCalls
     *
     * @return int
     */
    public function getMaxCalls()
    {
        return $this->_maxCalls;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCallWaiting($data)
    {

        if ($this->_callWaiting != $data) {
            $this->_logChange('callWaiting');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_callWaiting = $data;

        } else if (!is_null($data)) {
            $this->_callWaiting = (int) $data;

        } else {
            $this->_callWaiting = $data;
        }
        return $this;
    }

    /**
     * Gets column callWaiting
     *
     * @return int
     */
    public function getCallWaiting()
    {
        return $this->_callWaiting;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setAttachVoicemailSound($data)
    {

        if ($this->_attachVoicemailSound != $data) {
            $this->_logChange('attachVoicemailSound');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_attachVoicemailSound = $data;

        } else if (!is_null($data)) {
            $this->_attachVoicemailSound = (int) $data;

        } else {
            $this->_attachVoicemailSound = $data;
        }
        return $this;
    }

    /**
     * Gets column attachVoicemailSound
     *
     * @return int
     */
    public function getAttachVoicemailSound()
    {
        return $this->_attachVoicemailSound;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setVoicemailEnabled($data)
    {

        if ($this->_voicemailEnabled != $data) {
            $this->_logChange('voicemailEnabled');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_voicemailEnabled = $data;

        } else if (!is_null($data)) {
            $this->_voicemailEnabled = (int) $data;

        } else {
            $this->_voicemailEnabled = $data;
        }
        return $this;
    }

    /**
     * Gets column voicemailEnabled
     *
     * @return int
     */
    public function getVoicemailEnabled()
    {
        return $this->_voicemailEnabled;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param string $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setTokenKey($data)
    {

        if ($this->_tokenKey != $data) {
            $this->_logChange('tokenKey');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_tokenKey = $data;

        } else if (!is_null($data)) {
            $this->_tokenKey = (string) $data;

        } else {
            $this->_tokenKey = $data;
        }
        return $this;
    }

    /**
     * Gets column tokenKey
     *
     * @return string
     */
    public function getTokenKey()
    {
        return $this->_tokenKey;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCountryId($data)
    {

        if ($this->_countryId != $data) {
            $this->_logChange('countryId');
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_countryId = $data;

        } else if (!is_null($data)) {
            $this->_countryId = (int) $data;

        } else {
            $this->_countryId = $data;
        }
        return $this;
    }

    /**
     * Gets column countryId
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->_countryId;
    }

    /**
     * Sets parent relation Company
     *
     * @param \IvozProvider\Model\Raw\Companies $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCompany(\IvozProvider\Model\Raw\Companies $data)
    {
        $this->_Company = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCompanyId($primaryKey);
        }

        $this->_setLoaded('UsersIbfk1');
        return $this;
    }

    /**
     * Gets parent Company
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\Companies
     */
    public function getCompany($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Company = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Company;
    }

    /**
     * Sets parent relation CallACL
     *
     * @param \IvozProvider\Model\Raw\CallACL $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCallACL(\IvozProvider\Model\Raw\CallACL $data)
    {
        $this->_CallACL = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCallACLId($primaryKey);
        }

        $this->_setLoaded('UsersIbfk10');
        return $this;
    }

    /**
     * Gets parent CallACL
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\CallACL
     */
    public function getCallACL($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk10';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_CallACL = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_CallACL;
    }

    /**
     * Sets parent relation BossAssistant
     *
     * @param \IvozProvider\Model\Raw\Users $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setBossAssistant(\IvozProvider\Model\Raw\Users $data)
    {
        $this->_BossAssistant = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setBossAssistantId($primaryKey);
        }

        $this->_setLoaded('UsersIbfk11');
        return $this;
    }

    /**
     * Gets parent BossAssistant
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\Users
     */
    public function getBossAssistant($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk11';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_BossAssistant = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_BossAssistant;
    }

    /**
     * Sets parent relation Country
     *
     * @param \IvozProvider\Model\Raw\Countries $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCountry(\IvozProvider\Model\Raw\Countries $data)
    {
        $this->_Country = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCountryId($primaryKey);
        }

        $this->_setLoaded('UsersIbfk12');
        return $this;
    }

    /**
     * Gets parent Country
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\Countries
     */
    public function getCountry($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk12';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Country = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Country;
    }

    /**
     * Sets parent relation Terminal
     *
     * @param \IvozProvider\Model\Raw\Terminals $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setTerminal(\IvozProvider\Model\Raw\Terminals $data)
    {
        $this->_Terminal = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setTerminalId($primaryKey);
        }

        $this->_setLoaded('UsersIbfk3');
        return $this;
    }

    /**
     * Gets parent Terminal
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\Terminals
     */
    public function getTerminal($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk3';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Terminal = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Terminal;
    }

    /**
     * Sets parent relation Extension
     *
     * @param \IvozProvider\Model\Raw\Extensions $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setExtension(\IvozProvider\Model\Raw\Extensions $data)
    {
        $this->_Extension = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setExtensionId($primaryKey);
        }

        $this->_setLoaded('UsersIbfk7');
        return $this;
    }

    /**
     * Gets parent Extension
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\Extensions
     */
    public function getExtension($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk7';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Extension = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Extension;
    }

    /**
     * Sets parent relation Timezone
     *
     * @param \IvozProvider\Model\Raw\Timezones $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setTimezone(\IvozProvider\Model\Raw\Timezones $data)
    {
        $this->_Timezone = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setTimezoneId($primaryKey);
        }

        $this->_setLoaded('UsersIbfk8');
        return $this;
    }

    /**
     * Gets parent Timezone
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\Timezones
     */
    public function getTimezone($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk8';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Timezone = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Timezone;
    }

    /**
     * Sets parent relation OutgoingDDI
     *
     * @param \IvozProvider\Model\Raw\DDIs $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setOutgoingDDI(\IvozProvider\Model\Raw\DDIs $data)
    {
        $this->_OutgoingDDI = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setOutgoingDDIId($primaryKey);
        }

        $this->_setLoaded('UsersIbfk9');
        return $this;
    }

    /**
     * Gets parent OutgoingDDI
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\DDIs
     */
    public function getOutgoingDDI($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk9';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_OutgoingDDI = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_OutgoingDDI;
    }

    /**
     * Sets dependent relations CallForwardSettings_ibfk_1
     *
     * @param array $data An array of \IvozProvider\Model\Raw\CallForwardSettings
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCallForwardSettingsByUser(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_CallForwardSettingsByUser === null) {

                $this->getCallForwardSettingsByUser();
            }

            $oldRelations = $this->_CallForwardSettingsByUser;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_CallForwardSettingsByUser = array();

        foreach ($data as $object) {
            $this->addCallForwardSettingsByUser($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations CallForwardSettings_ibfk_1
     *
     * @param \IvozProvider\Model\Raw\CallForwardSettings $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addCallForwardSettingsByUser(\IvozProvider\Model\Raw\CallForwardSettings $data)
    {
        $this->_CallForwardSettingsByUser[] = $data;
        $this->_setLoaded('CallForwardSettingsIbfk1');
        return $this;
    }

    /**
     * Gets dependent CallForwardSettings_ibfk_1
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\CallForwardSettings
     */
    public function getCallForwardSettingsByUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CallForwardSettingsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_CallForwardSettingsByUser = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_CallForwardSettingsByUser;
    }

    /**
     * Sets dependent relations CallForwardSettings_ibfk_3
     *
     * @param array $data An array of \IvozProvider\Model\Raw\CallForwardSettings
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setCallForwardSettingsByVoiceMailUser(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_CallForwardSettingsByVoiceMailUser === null) {

                $this->getCallForwardSettingsByVoiceMailUser();
            }

            $oldRelations = $this->_CallForwardSettingsByVoiceMailUser;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_CallForwardSettingsByVoiceMailUser = array();

        foreach ($data as $object) {
            $this->addCallForwardSettingsByVoiceMailUser($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations CallForwardSettings_ibfk_3
     *
     * @param \IvozProvider\Model\Raw\CallForwardSettings $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addCallForwardSettingsByVoiceMailUser(\IvozProvider\Model\Raw\CallForwardSettings $data)
    {
        $this->_CallForwardSettingsByVoiceMailUser[] = $data;
        $this->_setLoaded('CallForwardSettingsIbfk3');
        return $this;
    }

    /**
     * Gets dependent CallForwardSettings_ibfk_3
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\CallForwardSettings
     */
    public function getCallForwardSettingsByVoiceMailUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'CallForwardSettingsIbfk3';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_CallForwardSettingsByVoiceMailUser = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_CallForwardSettingsByVoiceMailUser;
    }

    /**
     * Sets dependent relations DDIs_ibfk_3
     *
     * @param array $data An array of \IvozProvider\Model\Raw\DDIs
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setDDIs(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_DDIs === null) {

                $this->getDDIs();
            }

            $oldRelations = $this->_DDIs;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_DDIs = array();

        foreach ($data as $object) {
            $this->addDDIs($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations DDIs_ibfk_3
     *
     * @param \IvozProvider\Model\Raw\DDIs $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addDDIs(\IvozProvider\Model\Raw\DDIs $data)
    {
        $this->_DDIs[] = $data;
        $this->_setLoaded('DDIsIbfk3');
        return $this;
    }

    /**
     * Gets dependent DDIs_ibfk_3
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\DDIs
     */
    public function getDDIs($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'DDIsIbfk3';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_DDIs = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_DDIs;
    }

    /**
     * Sets dependent relations ExternalCallFilters_ibfk_7
     *
     * @param array $data An array of \IvozProvider\Model\Raw\ExternalCallFilters
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setExternalCallFiltersByHolidayVoiceMailUser(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_ExternalCallFiltersByHolidayVoiceMailUser === null) {

                $this->getExternalCallFiltersByHolidayVoiceMailUser();
            }

            $oldRelations = $this->_ExternalCallFiltersByHolidayVoiceMailUser;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_ExternalCallFiltersByHolidayVoiceMailUser = array();

        foreach ($data as $object) {
            $this->addExternalCallFiltersByHolidayVoiceMailUser($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations ExternalCallFilters_ibfk_7
     *
     * @param \IvozProvider\Model\Raw\ExternalCallFilters $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addExternalCallFiltersByHolidayVoiceMailUser(\IvozProvider\Model\Raw\ExternalCallFilters $data)
    {
        $this->_ExternalCallFiltersByHolidayVoiceMailUser[] = $data;
        $this->_setLoaded('ExternalCallFiltersIbfk7');
        return $this;
    }

    /**
     * Gets dependent ExternalCallFilters_ibfk_7
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\ExternalCallFilters
     */
    public function getExternalCallFiltersByHolidayVoiceMailUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ExternalCallFiltersIbfk7';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_ExternalCallFiltersByHolidayVoiceMailUser = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_ExternalCallFiltersByHolidayVoiceMailUser;
    }

    /**
     * Sets dependent relations ExternalCallFilters_ibfk_8
     *
     * @param array $data An array of \IvozProvider\Model\Raw\ExternalCallFilters
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setExternalCallFiltersByOutOfScheduleVoiceMailUser(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_ExternalCallFiltersByOutOfScheduleVoiceMailUser === null) {

                $this->getExternalCallFiltersByOutOfScheduleVoiceMailUser();
            }

            $oldRelations = $this->_ExternalCallFiltersByOutOfScheduleVoiceMailUser;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_ExternalCallFiltersByOutOfScheduleVoiceMailUser = array();

        foreach ($data as $object) {
            $this->addExternalCallFiltersByOutOfScheduleVoiceMailUser($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations ExternalCallFilters_ibfk_8
     *
     * @param \IvozProvider\Model\Raw\ExternalCallFilters $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addExternalCallFiltersByOutOfScheduleVoiceMailUser(\IvozProvider\Model\Raw\ExternalCallFilters $data)
    {
        $this->_ExternalCallFiltersByOutOfScheduleVoiceMailUser[] = $data;
        $this->_setLoaded('ExternalCallFiltersIbfk8');
        return $this;
    }

    /**
     * Gets dependent ExternalCallFilters_ibfk_8
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\ExternalCallFilters
     */
    public function getExternalCallFiltersByOutOfScheduleVoiceMailUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ExternalCallFiltersIbfk8';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_ExternalCallFiltersByOutOfScheduleVoiceMailUser = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_ExternalCallFiltersByOutOfScheduleVoiceMailUser;
    }

    /**
     * Sets dependent relations HuntGroupCallForwardSettings_ibfk_3
     *
     * @param array $data An array of \IvozProvider\Model\Raw\HuntGroupCallForwardSettings
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setHuntGroupCallForwardSettings(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_HuntGroupCallForwardSettings === null) {

                $this->getHuntGroupCallForwardSettings();
            }

            $oldRelations = $this->_HuntGroupCallForwardSettings;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_HuntGroupCallForwardSettings = array();

        foreach ($data as $object) {
            $this->addHuntGroupCallForwardSettings($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations HuntGroupCallForwardSettings_ibfk_3
     *
     * @param \IvozProvider\Model\Raw\HuntGroupCallForwardSettings $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addHuntGroupCallForwardSettings(\IvozProvider\Model\Raw\HuntGroupCallForwardSettings $data)
    {
        $this->_HuntGroupCallForwardSettings[] = $data;
        $this->_setLoaded('HuntGroupCallForwardSettingsIbfk3');
        return $this;
    }

    /**
     * Gets dependent HuntGroupCallForwardSettings_ibfk_3
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\HuntGroupCallForwardSettings
     */
    public function getHuntGroupCallForwardSettings($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'HuntGroupCallForwardSettingsIbfk3';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_HuntGroupCallForwardSettings = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_HuntGroupCallForwardSettings;
    }

    /**
     * Sets dependent relations HuntGroupsRelUsers_ibfk_2
     *
     * @param array $data An array of \IvozProvider\Model\Raw\HuntGroupsRelUsers
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setHuntGroupsRelUsers(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_HuntGroupsRelUsers === null) {

                $this->getHuntGroupsRelUsers();
            }

            $oldRelations = $this->_HuntGroupsRelUsers;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_HuntGroupsRelUsers = array();

        foreach ($data as $object) {
            $this->addHuntGroupsRelUsers($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations HuntGroupsRelUsers_ibfk_2
     *
     * @param \IvozProvider\Model\Raw\HuntGroupsRelUsers $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addHuntGroupsRelUsers(\IvozProvider\Model\Raw\HuntGroupsRelUsers $data)
    {
        $this->_HuntGroupsRelUsers[] = $data;
        $this->_setLoaded('HuntGroupsRelUsersIbfk2');
        return $this;
    }

    /**
     * Gets dependent HuntGroupsRelUsers_ibfk_2
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\HuntGroupsRelUsers
     */
    public function getHuntGroupsRelUsers($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'HuntGroupsRelUsersIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_HuntGroupsRelUsers = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_HuntGroupsRelUsers;
    }

    /**
     * Sets dependent relations IVRCommon_ibfk_8
     *
     * @param array $data An array of \IvozProvider\Model\Raw\IVRCommon
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setIVRCommonByTimeoutVoiceMailUser(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_IVRCommonByTimeoutVoiceMailUser === null) {

                $this->getIVRCommonByTimeoutVoiceMailUser();
            }

            $oldRelations = $this->_IVRCommonByTimeoutVoiceMailUser;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_IVRCommonByTimeoutVoiceMailUser = array();

        foreach ($data as $object) {
            $this->addIVRCommonByTimeoutVoiceMailUser($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations IVRCommon_ibfk_8
     *
     * @param \IvozProvider\Model\Raw\IVRCommon $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addIVRCommonByTimeoutVoiceMailUser(\IvozProvider\Model\Raw\IVRCommon $data)
    {
        $this->_IVRCommonByTimeoutVoiceMailUser[] = $data;
        $this->_setLoaded('IVRCommonIbfk8');
        return $this;
    }

    /**
     * Gets dependent IVRCommon_ibfk_8
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\IVRCommon
     */
    public function getIVRCommonByTimeoutVoiceMailUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'IVRCommonIbfk8';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_IVRCommonByTimeoutVoiceMailUser = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_IVRCommonByTimeoutVoiceMailUser;
    }

    /**
     * Sets dependent relations IVRCommon_ibfk_9
     *
     * @param array $data An array of \IvozProvider\Model\Raw\IVRCommon
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setIVRCommonByErrorVoiceMailUser(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_IVRCommonByErrorVoiceMailUser === null) {

                $this->getIVRCommonByErrorVoiceMailUser();
            }

            $oldRelations = $this->_IVRCommonByErrorVoiceMailUser;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_IVRCommonByErrorVoiceMailUser = array();

        foreach ($data as $object) {
            $this->addIVRCommonByErrorVoiceMailUser($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations IVRCommon_ibfk_9
     *
     * @param \IvozProvider\Model\Raw\IVRCommon $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addIVRCommonByErrorVoiceMailUser(\IvozProvider\Model\Raw\IVRCommon $data)
    {
        $this->_IVRCommonByErrorVoiceMailUser[] = $data;
        $this->_setLoaded('IVRCommonIbfk9');
        return $this;
    }

    /**
     * Gets dependent IVRCommon_ibfk_9
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\IVRCommon
     */
    public function getIVRCommonByErrorVoiceMailUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'IVRCommonIbfk9';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_IVRCommonByErrorVoiceMailUser = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_IVRCommonByErrorVoiceMailUser;
    }

    /**
     * Sets dependent relations IVRCustom_ibfk_8
     *
     * @param array $data An array of \IvozProvider\Model\Raw\IVRCustom
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setIVRCustomByTimeoutVoiceMailUser(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_IVRCustomByTimeoutVoiceMailUser === null) {

                $this->getIVRCustomByTimeoutVoiceMailUser();
            }

            $oldRelations = $this->_IVRCustomByTimeoutVoiceMailUser;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_IVRCustomByTimeoutVoiceMailUser = array();

        foreach ($data as $object) {
            $this->addIVRCustomByTimeoutVoiceMailUser($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations IVRCustom_ibfk_8
     *
     * @param \IvozProvider\Model\Raw\IVRCustom $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addIVRCustomByTimeoutVoiceMailUser(\IvozProvider\Model\Raw\IVRCustom $data)
    {
        $this->_IVRCustomByTimeoutVoiceMailUser[] = $data;
        $this->_setLoaded('IVRCustomIbfk8');
        return $this;
    }

    /**
     * Gets dependent IVRCustom_ibfk_8
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\IVRCustom
     */
    public function getIVRCustomByTimeoutVoiceMailUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'IVRCustomIbfk8';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_IVRCustomByTimeoutVoiceMailUser = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_IVRCustomByTimeoutVoiceMailUser;
    }

    /**
     * Sets dependent relations IVRCustom_ibfk_9
     *
     * @param array $data An array of \IvozProvider\Model\Raw\IVRCustom
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setIVRCustomByErrorVoiceMailUser(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_IVRCustomByErrorVoiceMailUser === null) {

                $this->getIVRCustomByErrorVoiceMailUser();
            }

            $oldRelations = $this->_IVRCustomByErrorVoiceMailUser;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_IVRCustomByErrorVoiceMailUser = array();

        foreach ($data as $object) {
            $this->addIVRCustomByErrorVoiceMailUser($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations IVRCustom_ibfk_9
     *
     * @param \IvozProvider\Model\Raw\IVRCustom $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addIVRCustomByErrorVoiceMailUser(\IvozProvider\Model\Raw\IVRCustom $data)
    {
        $this->_IVRCustomByErrorVoiceMailUser[] = $data;
        $this->_setLoaded('IVRCustomIbfk9');
        return $this;
    }

    /**
     * Gets dependent IVRCustom_ibfk_9
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\IVRCustom
     */
    public function getIVRCustomByErrorVoiceMailUser($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'IVRCustomIbfk9';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_IVRCustomByErrorVoiceMailUser = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_IVRCustomByErrorVoiceMailUser;
    }

    /**
     * Sets dependent relations IVRCustomEntries_ibfk_4
     *
     * @param array $data An array of \IvozProvider\Model\Raw\IVRCustomEntries
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setIVRCustomEntries(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_IVRCustomEntries === null) {

                $this->getIVRCustomEntries();
            }

            $oldRelations = $this->_IVRCustomEntries;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_IVRCustomEntries = array();

        foreach ($data as $object) {
            $this->addIVRCustomEntries($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations IVRCustomEntries_ibfk_4
     *
     * @param \IvozProvider\Model\Raw\IVRCustomEntries $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addIVRCustomEntries(\IvozProvider\Model\Raw\IVRCustomEntries $data)
    {
        $this->_IVRCustomEntries[] = $data;
        $this->_setLoaded('IVRCustomEntriesIbfk4');
        return $this;
    }

    /**
     * Gets dependent IVRCustomEntries_ibfk_4
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\IVRCustomEntries
     */
    public function getIVRCustomEntries($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'IVRCustomEntriesIbfk4';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_IVRCustomEntries = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_IVRCustomEntries;
    }

    /**
     * Sets dependent relations PickUpRelUsers_ibfk_2
     *
     * @param array $data An array of \IvozProvider\Model\Raw\PickUpRelUsers
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setPickUpRelUsers(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_PickUpRelUsers === null) {

                $this->getPickUpRelUsers();
            }

            $oldRelations = $this->_PickUpRelUsers;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_PickUpRelUsers = array();

        foreach ($data as $object) {
            $this->addPickUpRelUsers($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations PickUpRelUsers_ibfk_2
     *
     * @param \IvozProvider\Model\Raw\PickUpRelUsers $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addPickUpRelUsers(\IvozProvider\Model\Raw\PickUpRelUsers $data)
    {
        $this->_PickUpRelUsers[] = $data;
        $this->_setLoaded('PickUpRelUsersIbfk2');
        return $this;
    }

    /**
     * Gets dependent PickUpRelUsers_ibfk_2
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\PickUpRelUsers
     */
    public function getPickUpRelUsers($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'PickUpRelUsersIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_PickUpRelUsers = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_PickUpRelUsers;
    }

    /**
     * Sets dependent relations Users_ibfk_11
     *
     * @param array $data An array of \IvozProvider\Model\Raw\Users
     * @return \IvozProvider\Model\Raw\Users
     */
    public function setUsers(array $data, $deleteOrphans = false)
    {
        if ($deleteOrphans === true) {

            if ($this->_Users === null) {

                $this->getUsers();
            }

            $oldRelations = $this->_Users;

            if (is_array($oldRelations)) {

                $dataPKs = array();

                foreach ($data as $newItem) {

                    $pk = $newItem->getPrimaryKey();
                    if (!empty($pk)) {
                        $dataPKs[] = $pk;
                    }
                }

                foreach ($oldRelations as $oldItem) {

                    if (!in_array($oldItem->getPrimaryKey(), $dataPKs)) {

                        $this->_orphans[] = $oldItem;
                    }
                }
            }
        }

        $this->_Users = array();

        foreach ($data as $object) {
            $this->addUsers($object);
        }

        return $this;
    }

    /**
     * Sets dependent relations Users_ibfk_11
     *
     * @param \IvozProvider\Model\Raw\Users $data
     * @return \IvozProvider\Model\Raw\Users
     */
    public function addUsers(\IvozProvider\Model\Raw\Users $data)
    {
        $this->_Users[] = $data;
        $this->_setLoaded('UsersIbfk11');
        return $this;
    }

    /**
     * Gets dependent Users_ibfk_11
     *
     * @param string or array $where
     * @param string or array $orderBy
     * @param boolean $avoidLoading skip data loading if it is not already
     * @return array The array of \IvozProvider\Model\Raw\Users
     */
    public function getUsers($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'UsersIbfk11';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('dependent', $fkName, $this, $where, $orderBy);
            $this->_Users = $related;
            $this->_setLoaded($fkName);
        }

        return $this->_Users;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return IvozProvider\Mapper\Sql\Users
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(true);

            if (class_exists('\IvozProvider\Mapper\Sql\Users')) {

                $this->setMapper(new \IvozProvider\Mapper\Sql\Users);

            } else {

                 new \Exception("Not a valid mapper class found");
            }

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(false);
        }

        return $this->_mapper;
    }

    /**
     * Returns the validator class for this model
     *
     * @return null | \IvozProvider\Model\Validator\Users
     */
    public function getValidator()
    {
        if ($this->_validator === null) {

            if (class_exists('\IvozProvider\\Validator\Users')) {

                $this->setValidator(new \IvozProvider\Validator\Users);
            }
        }

        return $this->_validator;
    }

    public function setFromArray($data)
    {
        return $this->getMapper()->loadModel($data, $this);
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
     * @see \Mapper\Sql\Users::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getId() === null) {
            $this->_logger->log('The value for Id cannot be null in deleteRowByPrimaryKey for ' . get_class($this), \Zend_Log::ERR);
            throw new \Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()->getDbTable()->delete(
            'id = ' .
             $this->getMapper()->getDbTable()->getAdapter()->quote($this->getId())
        );
    }

    public function mustUpdateEtag()
    {
        return true;
    }

}