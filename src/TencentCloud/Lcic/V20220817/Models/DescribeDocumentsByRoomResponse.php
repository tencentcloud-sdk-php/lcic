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
 * DescribeDocumentsByRoom返回参数结构体
 *
 * @method array getDocuments() 获取文档信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocuments(array $Documents) 设置文档信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取符合查询条件文档总数
 * @method void setTotal(integer $Total) 设置符合查询条件文档总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDocumentsByRoomResponse extends AbstractModel
{
    /**
     * @var array 文档信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Documents;

    /**
     * @var integer 符合查询条件文档总数
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Documents 文档信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 符合查询条件文档总数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Documents",$param) and $param["Documents"] !== null) {
            $this->Documents = [];
            foreach ($param["Documents"] as $key => $value){
                $obj = new DocumentInfo();
                $obj->deserialize($value);
                array_push($this->Documents, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
