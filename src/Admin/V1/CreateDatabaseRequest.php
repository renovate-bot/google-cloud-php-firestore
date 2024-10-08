<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/firestore_admin.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [FirestoreAdmin.CreateDatabase][google.firestore.admin.v1.FirestoreAdmin.CreateDatabase].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.CreateDatabaseRequest</code>
 */
class CreateDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A parent name of the form
     * `projects/{project_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The Database to create.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database database = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database = null;
    /**
     * Required. The ID to use for the database, which will become the final
     * component of the database's resource name.
     * This value should be 4-63 characters. Valid characters are /[a-z][0-9]-/
     * with first character a letter and the last a letter or a number. Must not
     * be UUID-like /[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}/.
     * "(default)" database ID is also valid.
     *
     * Generated from protobuf field <code>string database_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database_id = '';

    /**
     * @param string                                    $parent     Required. A parent name of the form
     *                                                              `projects/{project_id}`
     *                                                              Please see {@see FirestoreAdminClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\Firestore\Admin\V1\Database $database   Required. The Database to create.
     * @param string                                    $databaseId Required. The ID to use for the database, which will become the final
     *                                                              component of the database's resource name.
     *
     *                                                              This value should be 4-63 characters. Valid characters are /[a-z][0-9]-/
     *                                                              with first character a letter and the last a letter or a number. Must not
     *                                                              be UUID-like /[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}/.
     *
     *                                                              "(default)" database ID is also valid.
     *
     * @return \Google\Cloud\Firestore\Admin\V1\CreateDatabaseRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Firestore\Admin\V1\Database $database, string $databaseId): self
    {
        return (new self())
            ->setParent($parent)
            ->setDatabase($database)
            ->setDatabaseId($databaseId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. A parent name of the form
     *           `projects/{project_id}`
     *     @type \Google\Cloud\Firestore\Admin\V1\Database $database
     *           Required. The Database to create.
     *     @type string $database_id
     *           Required. The ID to use for the database, which will become the final
     *           component of the database's resource name.
     *           This value should be 4-63 characters. Valid characters are /[a-z][0-9]-/
     *           with first character a letter and the last a letter or a number. Must not
     *           be UUID-like /[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}/.
     *           "(default)" database ID is also valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\FirestoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A parent name of the form
     * `projects/{project_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. A parent name of the form
     * `projects/{project_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The Database to create.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database database = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Firestore\Admin\V1\Database|null
     */
    public function getDatabase()
    {
        return $this->database;
    }

    public function hasDatabase()
    {
        return isset($this->database);
    }

    public function clearDatabase()
    {
        unset($this->database);
    }

    /**
     * Required. The Database to create.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database database = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Database $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\Database::class);
        $this->database = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the database, which will become the final
     * component of the database's resource name.
     * This value should be 4-63 characters. Valid characters are /[a-z][0-9]-/
     * with first character a letter and the last a letter or a number. Must not
     * be UUID-like /[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}/.
     * "(default)" database ID is also valid.
     *
     * Generated from protobuf field <code>string database_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabaseId()
    {
        return $this->database_id;
    }

    /**
     * Required. The ID to use for the database, which will become the final
     * component of the database's resource name.
     * This value should be 4-63 characters. Valid characters are /[a-z][0-9]-/
     * with first character a letter and the last a letter or a number. Must not
     * be UUID-like /[0-9a-f]{8}(-[0-9a-f]{4}){3}-[0-9a-f]{12}/.
     * "(default)" database ID is also valid.
     *
     * Generated from protobuf field <code>string database_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_id = $var;

        return $this;
    }

}

