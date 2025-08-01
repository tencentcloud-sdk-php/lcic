<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchCreateGroupWithMembers请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码平台应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台应用ID
 * @method array getGroupBaseInfos() 获取批量创建群组基础信息，最大长度限制256
 * @method void setGroupBaseInfos(array $GroupBaseInfos) 设置批量创建群组基础信息，最大长度限制256
 * @method array getMemberIds() 获取群组绑定的成员列表，一次性最多200个
 * @method void setMemberIds(array $MemberIds) 设置群组绑定的成员列表，一次性最多200个
 */
class BatchCreateGroupWithMembersRequest extends AbstractModel
{
    /**
     * @var integer 低代码平台应用ID
     */
    public $SdkAppId;

    /**
     * @var array 批量创建群组基础信息，最大长度限制256
     */
    public $GroupBaseInfos;

    /**
     * @var array 群组绑定的成员列表，一次性最多200个
     */
    public $MemberIds;

    /**
     * @param integer $SdkAppId 低代码平台应用ID
     * @param array $GroupBaseInfos 批量创建群组基础信息，最大长度限制256
     * @param array $MemberIds 群组绑定的成员列表，一次性最多200个
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("GroupBaseInfos",$param) and $param["GroupBaseInfos"] !== null) {
            $this->GroupBaseInfos = [];
            foreach ($param["GroupBaseInfos"] as $key => $value){
                $obj = new GroupBaseInfo();
                $obj->deserialize($value);
                array_push($this->GroupBaseInfos, $obj);
            }
        }

        if (array_key_exists("MemberIds",$param) and $param["MemberIds"] !== null) {
            $this->MemberIds = $param["MemberIds"];
        }
    }
}
