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
 * 表情消息
 *
 * @method integer getIndex() 获取表情索引，用户自定义。
 * @method void setIndex(integer $Index) 设置表情索引，用户自定义。
 * @method string getData() 获取额外数据。
 * @method void setData(string $Data) 设置额外数据。
 */
class FaceMsgContent extends AbstractModel
{
    /**
     * @var integer 表情索引，用户自定义。
     */
    public $Index;

    /**
     * @var string 额外数据。
     */
    public $Data;

    /**
     * @param integer $Index 表情索引，用户自定义。
     * @param string $Data 额外数据。
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
