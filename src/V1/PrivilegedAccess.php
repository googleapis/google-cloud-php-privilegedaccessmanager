<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace Google\Cloud\PrivilegedAccessManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Privileged access that this service can be used to gate.
 *
 * Generated from protobuf message <code>google.cloud.privilegedaccessmanager.v1.PrivilegedAccess</code>
 */
class PrivilegedAccess extends \Google\Protobuf\Internal\Message
{
    protected $access_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PrivilegedAccessManager\V1\PrivilegedAccess\GcpIamAccess $gcp_iam_access
     *           Access to a Google Cloud resource through IAM.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privilegedaccessmanager\V1\Privilegedaccessmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Access to a Google Cloud resource through IAM.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.PrivilegedAccess.GcpIamAccess gcp_iam_access = 1;</code>
     * @return \Google\Cloud\PrivilegedAccessManager\V1\PrivilegedAccess\GcpIamAccess|null
     */
    public function getGcpIamAccess()
    {
        return $this->readOneof(1);
    }

    public function hasGcpIamAccess()
    {
        return $this->hasOneof(1);
    }

    /**
     * Access to a Google Cloud resource through IAM.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.PrivilegedAccess.GcpIamAccess gcp_iam_access = 1;</code>
     * @param \Google\Cloud\PrivilegedAccessManager\V1\PrivilegedAccess\GcpIamAccess $var
     * @return $this
     */
    public function setGcpIamAccess($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PrivilegedAccessManager\V1\PrivilegedAccess\GcpIamAccess::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAccessType()
    {
        return $this->whichOneof("access_type");
    }

}

