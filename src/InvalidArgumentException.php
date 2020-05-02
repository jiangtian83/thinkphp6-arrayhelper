<?php

/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/5/2
 * Time: обнГ4:30
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */

namespace AILearning;

/**
 * InvalidParamException represents an exception caused by invalid parameters passed to a method.
 */
class InvalidArgumentException extends \Exception
{
	/**
	 * @return string the user-friendly name of this exception
	 */
	public function getName()
	{
		return 'Invalid Parameter';
	}
}