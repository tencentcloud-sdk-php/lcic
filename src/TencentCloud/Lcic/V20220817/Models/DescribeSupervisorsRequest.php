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
 * DescribeSupervisors请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。

 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。

 * @method integer getLimit() 获取每页数据量，最大100。 不填默认20.
 * @method void setLimit(integer $Limit) 设置每页数据量，最大100。 不填默认20.
 * @method integer getPage() 获取分页查询当前页数，从1开始递增，不填默认为1。
 * @method void setPage(integer $Page) 设置分页查询当前页数，从1开始递增，不填默认为1。
 */
class DescribeSupervisorsRequest extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。

     */
    public $SdkAppId;

    /**
     * @var integer 每页数据量，最大100。 不填默认20.
     */
    public $Limit;

    /**
     * @var integer 分页查询当前页数，从1开始递增，不填默认为1。
     */
    public $Page;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。

     * @param integer $Limit 每页数据量，最大100。 不填默认20.
     * @param integer $Page 分页查询当前页数，从1开始递增，不填默认为1。
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
