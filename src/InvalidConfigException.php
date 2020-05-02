<?php

/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/5/2
 * Time: обнГ4:30
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace JArray;

/**
 * InvalidConfigException represents an exception caused by incorrect object configuration.
 */
class InvalidConfigException extends \BadMethodCallException
{
	/**
	 * @return string the user-friendly name of this exception
	 */
	public function getName()
	{
		return 'Invalid Configuration';
	}
}