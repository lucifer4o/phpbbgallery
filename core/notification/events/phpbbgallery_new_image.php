<?php
/**
*
* @package phpBB Gallery Extension
* @copyright (c) 2014 Lucifer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace phpbbgallery\core\notification\events;

class phpbbgallery_new_image extends \phpbb\notification\type\base
{
	/**
	* Get notification type name
	*
	* @return string
	*/
	public function get_type()
	{
		return 'phpbbgallery.core.notification.new_image';
	}
	/**
	* Notification option data (for outputting to the user)
	*
	* @var bool|array False if the service should use it's default data
	* 					Array of data (including keys 'id', 'lang', and 'group')
	*/
	public static $notification_option = array(
		'lang'	=> 'NOTIFICATION_TYPE_PHPBBGALLERY_NEW_IMAGE',
	);

	/** @var \phpbb\user_loader */
	protected $user_loader;

	/** @var \phpbb\config\config */
	protected $config;

	public function set_config(\phpbb\config\config $config)
	{
		$this->config = $config;
	}

	public function set_user_loader(\phpbb\user_loader $user_loader)
	{
		$this->user_loader = $user_loader;
	}

	/**
	* Is this type available to the current user (defines whether or not it will be shown in the UCP Edit notification options)
	*
	* @return bool True/False whether or not this is available to the user
	*/
	public function is_available()
	{
		return true;
	}

	/**
	 * Get the id of the rule
	 *
	 * @param array $data The data for the updated rules
	 * @return mixed
	 */
	public static function get_item_id($data)
	{
		return $data['last_image_id'];
	}

	/**
	 * Get the id of the parent
	 *
	 * @param array $data The data for the updated rules
	 * @return mixed
	 */
	public static function get_item_parent_id($data)
	{
		// No parent
		return $data['album_id'];
	}

	/**
	 * Find the users who will receive notifications
	 *
	 * @param array $data The data for the updated rules
	 *
	 * @param array $options
	 * @return array
	 */
	public function find_users_for_notification($data, $options = array())
	{
		$this->user_loader->load_users($data['user_ids']);
		return $this->check_user_notification_options($data['user_ids'], $options);
	}

	/**
	* Get the user's avatar
	*/
	public function get_avatar()
	{
		return 0;
	}
	/**
	* Get the HTML formatted title of this notification
	*
	* @return string
	*/
	public function get_title()
	{
		return $this->language->lang('NOTIFICATION_PHPBBGALLERY_NEW_IMAGE', $this->get_data('album_name'));
	}

	/**
	 * Get the HTML formatted reference of the notification
	 *
	 * @return string
	 */
	public function get_reference()
	{
		//return true;
		//return censor_text($this->get_data('album_name'));
	}

	/**
	* Get email template
	*
	* @return string|bool
	*/
	public function get_email_template()
	{
		return false;
	}
	/**
	* Get email template variables
	*
	* @return array
	*/
	public function get_email_template_variables()
	{
		return array();
	}

	/**
	 * Get the url to this item
	 *
	 * @return string URL
	 */
	public function get_url()
	{
		return $this->get_data('album_url');
	}

	/**
	 * Users needed to query before this notification can be displayed
	 *
	 * @return array Array of user_ids
	 */
	public function users_to_query()
	{
		return array();
	}

	/**
	* Function for preparing the data for insertion in an SQL query
	* (The service handles insertion)
	*
	* @param array $data The data for the updated rules
	* @param array $pre_create_data Data from pre_create_insert_array()
	*
	* @return array Array of data ready to be inserted into the database
	*/
	public function create_insert_array($data, $pre_create_data = array())
	{
		$this->set_data('album_name', $data['album_name']);
		$this->set_data('album_url', $data['album_url']);
		parent::create_insert_array($data, $pre_create_data);
	}
}
