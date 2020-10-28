<?php
/*
 *
 *  * Copyright 2012-2020 the original author or authors.
 *  *
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      https://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *
 */

error_reporting(E_ERROR);
ob_start();
header("HTTP/1.1 301 Moved Permanently");

$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0;
$ptid = isset($_GET['ptid']) ? intval($_GET['ptid']) : 0;
$goto = isset($_GET['goto']) ? $_GET['goto'] : '';

$url = 'forum.php?mod=redirect&goto='."$goto&ptid=$ptid&pid=$pid";

header("location: $url");
?>