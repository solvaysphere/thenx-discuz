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

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: discuz_container.php 32457 2013-01-21 05:19:57Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class discuz_container extends discuz_base
{

	protected $_obj;

	protected $_objs = array();

	public function __construct($obj = null) {
		if(isset($obj)) {
			if(is_object($obj)) {
				$this->_obj = $obj;
			} else if(is_string($obj)) {
				try {
					if(func_num_args()) {
						$p = func_get_args();
						unset($p[0]);
						$ref = new ReflectionClass($obj);
						$this->_obj = $ref->newInstanceArgs($p);
						unset($ref);
					} else {
						$this->_obj = new $obj;
					}
				} catch (Exception $e) {
					throw new Exception('Class "'.$obj.'" does not exists.');
				}
			}
		}
		parent::__construct();
	}

	public function getobj() {
		return $this->_obj;
	}

	public function setobj($value) {
		$this->_obj = $value;
	}

	public function __call($name, $p) {
		if(method_exists($this->_obj, $name)) {
			if(isset($this->_obj->methods[$name][0])) {
				$this->_call($name, $p, 0);
			}
			switch (count($p)) {
				case 0:	$this->_obj->data = $this->_obj->{$name}();break;
				case 1:	$this->_obj->data = $this->_obj->{$name}($p[0]);break;
				case 2:	$this->_obj->data = $this->_obj->{$name}($p[0], $p[1]);break;
				case 3:	$this->_obj->data = $this->_obj->{$name}($p[0], $p[1], $p[2]);break;
				case 4:	$this->_obj->data = $this->_obj->{$name}($p[0], $p[1], $p[2], $p[3]);break;
				case 5:	$this->_obj->data = $this->_obj->{$name}($p[0], $p[1], $p[2], $p[3], $p[4]);break;
				default: $this->_obj->data = call_user_func_array(array($this->_obj, $name), $p);break;
			}
			if(isset($this->_obj->methods[$name][1])) {
				$this->_call($name, $p, 1);
			}

			return $this->_obj->data;
		} else {
			throw new Exception('Class "'.get_class($this->_obj).'" does not have a method named "'.$name.'".');
		}
	}

	protected function _call($name, $p, $type) {
		$ret = null;
		if(isset($this->_obj->methods[$name][$type])) {
			foreach($this->_obj->methods[$name][$type] as $extend) {
				if(is_array($extend) && isset($extend['class'])) {
					$obj = $this->_getobj($extend['class'], $this->_obj);
					switch (count($p)) {
						case 0:	$ret = $obj->{$extend['method']}();break;
						case 1:	$ret = $obj->{$extend['method']}($p[0]);break;
						case 2:	$ret = $obj->{$extend['method']}($p[0], $p[1]);break;
						case 3:	$ret = $obj->{$extend['method']}($p[0], $p[1], $p[2]);break;
						case 4:	$ret = $obj->{$extend['method']}($p[0], $p[1], $p[2], $p[3]);break;
						case 5:	$ret = $obj->{$extend['method']}($p[0], $p[1], $p[2], $p[3], $p[4]);break;
						default: $ret = call_user_func_array(array($obj, $extend['method']), $p);break;
					}
				} elseif(is_callable($extend, true)) {
					if(is_array($extend)) {
						list($obj, $method) = $extend;
						if(method_exists($obj, $method)) {
							if(is_object($obj)) {
								$obj->obj = $this->_obj;
								switch (count($p)) {
									case 0:	$ret = $obj->{$method}();break;
									case 1:	$ret = $obj->{$method}($p[0]);break;
									case 2:	$ret = $obj->{$method}($p[0], $p[1]);break;
									case 3:	$ret = $obj->{$method}($p[0], $p[1], $p[2]);break;
									case 4:	$ret = $obj->{$method}($p[0], $p[1], $p[2], $p[3]);break;
									case 5:	$ret = $obj->{$method}($p[0], $p[1], $p[2], $p[3], $p[4]);break;
									default: $ret = call_user_func_array(array($obj, $method), $p);break;
								}
							} else {
								$p[] = $this;
								$ret = call_user_func_array($extend, $p);
							}
						}/* else {
							throw new Exception('Class "'.get_class($extend[0]).'" does not have a method named "'.$extend[1].'".');
						}*/
					} else {
						$p[] = $this->_obj;
						$ret = call_user_func_array($extend, $p);
					}
				}
			}
		}
		return $ret;
	}

	protected function _getobj($class, $obj) {
		if(!isset($this->_objs[$class])) {
			$this->_objs[$class] = new $class($obj);
			if(method_exists($this->_objs[$class], 'init_base_var')) {
				$this->_objs[$class]->init_base_var();
			}
		}
		return $this->_objs[$class];
	}

	public function __get($name) {
		if(isset($this->_obj) && property_exists($this->_obj, $name) === true) {
			return $this->_obj->$name;
		} else {
			return parent::__get($name);
		}
	}

	public function __set($name, $value) {
		if(isset($this->_obj) && property_exists($this->_obj, $name) === true) {
			return $this->_obj->$name = $value;
		} else {
			return parent::__set($name, $value);
		}
	}

	public function __isset($name) {
		return isset($this->_obj->$name);
	}

}
?>