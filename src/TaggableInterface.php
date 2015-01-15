<?php namespace Cartalyst\Tags;
/**
 * Part of the Tags package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the license.txt file.
 *
 * @package    Tags
 * @version    1.0.0
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2014, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Database\Eloquent\Builder;

interface TaggableInterface {

	/**
	 * Returns the tags delimiter.
	 *
	 * @return string
	 */
	public static function getTagsDelimiter();

	/**
	 * Sets the tags delimiter.
	 *
	 * @param  string  $delimiter
	 * @return $this
	 */
	public static function setTagsDelimiter($delimiter);

	/**
	 * Returns the Eloquent tags model name.
	 *
	 * @return string
	 */
	public static function getTagsModel();

	/**
	 * Sets the Eloquent tags model name.
	 *
	 * @param  string  $model
	 * @return void
	 */
	public static function setTagsModel($model);

	/**
	 * Returns the slug generator.
	 *
	 * @return string
	 */
	public static function getSlugGenerator();

	/**
	 * Sets the slug generator.
	 *
	 * @param  string  $name
	 * @return void
	 */
	public static function setSlugGenerator($name);

	/**
	 * Returns the entity Eloquent tag model object.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
	 */
	public function tags();

	/**
	 * Returns all the tags under the entity namespace.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function allTags();

	/**
	 * Returns all the entities with the given tags.
	 *
	 * @param  \Illuminate\Database\Eloquent\Builder  $query
	 * @param  string|array  $tags
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function scopeWhereTag(Builder $query, $tags);

	/**
	 * Attaches multiple tags to the entity.
	 *
	 * @param  string|array  $tags
	 * @return bool
	 */
	public function tag($tags);

	/**
	 * Detaches multiple tags from the entity.
	 *
	 * @param  string|array  $tags
	 * @return bool
	 */
	public function untag($tags);

	/**
	 * Attaches or detaches the given tags.
	 *
	 * @param  string|array  $tags
	 * @param  string  $type
	 * @return bool
	 */
	public function setTags($tags, $type = 'name');

	/**
	 * Attaches the given tag to the entity.
	 *
	 * @param  string  $name
	 * @return void
	 */
	public function addTag($name);

	/**
	 * Detaches the given tag from the entity.
	 *
	 * @param  string  $name
	 * @return void
	 */
	public function removeTag($name);

	/**
	 * Prepares the given tags before being saved.
	 *
	 * @param  string|array  $tags
	 * @return array
	 */
	public function prepareTags($tags);

}
