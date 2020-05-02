<?php

/**
 * Created by PhpStorm.
 * Author: jt
 * Date: 2020/5/2
 * Time: 下午4:13
 * E-Mail: 284053253@qq.com
 * QQ: 284053253
 */


/**
 * Object that represents the removal of array value while performing [[ArrayHelper::merge()]].
 *
 * Usage example:
 *
 * ```php
 * $array1 = [
 *     'ids' => [
 *         1,
 *     ],
 *     'validDomains' => [
 *         'example.com',
 *         'www.example.com',
 *     ],
 * ];
 *
 * $array2 = [
 *     'ids' => [
 *         2,
 *     ],
 *     'validDomains' => new \yii\helpers\UnsetArrayValue(),
 * ];
 *
 * $result = \yii\helpers\ArrayHelper::merge($array1, $array2);
 * ```
 *
 * The result will be
 *
 * ```php
 * [
 *     'ids' => [
 *         1,
 *         2,
 *     ],
 * ]
 * ```
 */
class UnsetArrayValue
{
	/**
	 * Restores class state after using `var_export()`.
	 *
	 * @param array $state
	 * @return UnsetArrayValue
	 * @see var_export()
	 * @since 2.0.16
	 */
	public static function __set_state($state)
	{
		return new self();
	}
}