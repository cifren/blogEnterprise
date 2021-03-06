<?php
/**                               ______________________________________________
*                          o O   |                                              |
*                 (((((  o      <     JDom Class - Cook Self Service library    |
*                ( o o )         |______________________________________________|
* --------oOOO-----(_)-----OOOo---------------------------------- www.j-cook.pro --- +
* @version		2.5
* @package		Cook Self Service
* @subpackage	JDom
* @license		GNU General Public License
* @author		Jocelyn HUARD
*
*             .oooO  Oooo.
*             (   )  (   )
* -------------\ (----) /----------------------------------------------------------- +
*               \_)  (_/
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class JDomHtmlFilters extends JDomHtml
{
	var $fallback = 'default';	//Used for default

	protected $list;
	
	/*
	 * Constuctor
	 * 	@namespace 	: requested class
	 *  @options	: Configuration
	 *
	 *	@list		: Filters items (already rendered with JForms/JDom)
	 *
	 */
	function __construct($args)
	{
		parent::__construct($args);
		
		$this->arg('list'		, null, $args);

	}


}