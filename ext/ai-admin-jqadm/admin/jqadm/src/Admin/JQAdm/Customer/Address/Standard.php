<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2017
 * @package Admin
 * @subpackage JQAdm
 */


namespace Aimeos\Admin\JQAdm\Customer\Address;

sprintf( 'address' ); // for translation


/**
 * Default implementation of customer address JQAdm client.
 *
 * @package Admin
 * @subpackage JQAdm
 */
class Standard
	extends \Aimeos\Admin\JQAdm\Common\Admin\Factory\Base
	implements \Aimeos\Admin\JQAdm\Common\Admin\Factory\Iface
{
	/** admin/jqadm/customer/address/standard/subparts
	 * List of JQAdm sub-clients rendered within the customer address section
	 *
	 * The output of the frontend is composed of the code generated by the JQAdm
	 * clients. Each JQAdm client can consist of serveral (or none) sub-clients
	 * that are responsible for rendering certain sub-parts of the output. The
	 * sub-clients can contain JQAdm clients themselves and therefore a
	 * hierarchical tree of JQAdm clients is composed. Each JQAdm client creates
	 * the output that is placed inside the container of its parent.
	 *
	 * At first, always the JQAdm code generated by the parent is printed, then
	 * the JQAdm code of its sub-clients. The order of the JQAdm sub-clients
	 * determines the order of the output of these sub-clients inside the parent
	 * container. If the configured list of clients is
	 *
	 *  array( "subclient1", "subclient2" )
	 *
	 * you can easily change the order of the output by reordering the subparts:
	 *
	 *  admin/jqadm/<clients>/subparts = array( "subclient1", "subclient2" )
	 *
	 * You can also remove one or more parts if they shouldn't be rendered:
	 *
	 *  admin/jqadm/<clients>/subparts = array( "subclient1" )
	 *
	 * As the clients only generates structural JQAdm, the layout defined via CSS
	 * should support adding, removing or reordering content by a fluid like
	 * design.
	 *
	 * @param array List of sub-client names
	 * @since 2016.01
	 * @category Developer
	 */
	private $subPartPath = 'admin/jqadm/customer/address/standard/subparts';
	private $subPartNames = [];


	/**
	 * Copies a resource
	 *
	 * @return string HTML output
	 */
	public function copy()
	{
		$view = $this->getView();

		$view->addressData = $this->toArray( $view->item, true );
		$view->addressBody = '';

		foreach( $this->getSubClients() as $client ) {
			$view->addressBody .= $client->copy();
		}

		return $this->render( $view );
	}


	/**
	 * Creates a new resource
	 *
	 * @return string HTML output
	 */
	public function create()
	{
		$view = $this->getView();

		$view->addressData = $view->param( 'address', [] );
		$view->addressBody = '';

		foreach( $this->getSubClients() as $client ) {
			$view->addressBody .= $client->create();
		}

		return $this->render( $view );
	}


	/**
	 * Returns a single resource
	 *
	 * @return string HTML output
	 */
	public function get()
	{
		$view = $this->getView();

		$view->addressData = $this->toArray( $view->item );
		$view->addressBody = '';

		foreach( $this->getSubClients() as $client ) {
			$view->addressBody .= $client->get();
		}

		return $this->render( $view );
	}


	/**
	 * Saves the data
	 */
	public function save()
	{
		$view = $this->getView();
		$context = $this->getContext();

		$manager = \Aimeos\MShop\Factory::createManager( $context, 'customer/address' );
		$manager->begin();

		try
		{
			$this->fromArray( $view->item, $view->param( 'address', [] ) );
			$view->addressBody = '';

			foreach( $this->getSubClients() as $client ) {
				$view->addressBody .= $client->save();
			}

			$manager->commit();
			return;
		}
		catch( \Aimeos\MShop\Exception $e )
		{
			$error = array( 'customer-item-address' => $context->getI18n()->dt( 'mshop', $e->getMessage() ) );
			$view->errors = $view->get( 'errors', [] ) + $error;
		}
		catch( \Exception $e )
		{
			$error = array( 'customer-item-address' => $e->getMessage() . ', ' . $e->getFile() . ':' . $e->getLine() );
			$view->errors = $view->get( 'errors', [] ) + $error;
		}

		$manager->rollback();

		throw new \Aimeos\Admin\JQAdm\Exception();
	}


	/**
	 * Returns the sub-client given by its name.
	 *
	 * @param string $type Name of the client type
	 * @param string|null $name Name of the sub-client (Default if null)
	 * @return \Aimeos\Admin\JQAdm\Iface Sub-client object
	 */
	public function getSubClient( $type, $name = null )
	{
		/** admin/jqadm/customer/address/decorators/excludes
		 * Excludes decorators added by the "common" option from the customer JQAdm client
		 *
		 * Decorators extend the functionality of a class by adding new aspects
		 * (e.g. log what is currently done), executing the methods of the underlying
		 * class only in certain conditions (e.g. only for logged in users) or
		 * modify what is returned to the caller.
		 *
		 * This option allows you to remove a decorator added via
		 * "admin/jqadm/common/decorators/default" before they are wrapped
		 * around the JQAdm client.
		 *
		 *  admin/jqadm/customer/address/decorators/excludes = array( 'decorator1' )
		 *
		 * This would remove the decorator named "decorator1" from the list of
		 * common decorators ("\Aimeos\Admin\JQAdm\Common\Decorator\*") added via
		 * "admin/jqadm/common/decorators/default" to the JQAdm client.
		 *
		 * @param array List of decorator names
		 * @since 2016.01
		 * @category Developer
		 * @see admin/jqadm/common/decorators/default
		 * @see admin/jqadm/customer/address/decorators/global
		 * @see admin/jqadm/customer/address/decorators/local
		 */

		/** admin/jqadm/customer/address/decorators/global
		 * Adds a list of globally available decorators only to the customer JQAdm client
		 *
		 * Decorators extend the functionality of a class by adding new aspects
		 * (e.g. log what is currently done), executing the methods of the underlying
		 * class only in certain conditions (e.g. only for logged in users) or
		 * modify what is returned to the caller.
		 *
		 * This option allows you to wrap global decorators
		 * ("\Aimeos\Admin\JQAdm\Common\Decorator\*") around the JQAdm client.
		 *
		 *  admin/jqadm/customer/address/decorators/global = array( 'decorator1' )
		 *
		 * This would add the decorator named "decorator1" defined by
		 * "\Aimeos\Admin\JQAdm\Common\Decorator\Decorator1" only to the JQAdm client.
		 *
		 * @param array List of decorator names
		 * @since 2016.01
		 * @category Developer
		 * @see admin/jqadm/common/decorators/default
		 * @see admin/jqadm/customer/address/decorators/excludes
		 * @see admin/jqadm/customer/address/decorators/local
		 */

		/** admin/jqadm/customer/address/decorators/local
		 * Adds a list of local decorators only to the customer JQAdm client
		 *
		 * Decorators extend the functionality of a class by adding new aspects
		 * (e.g. log what is currently done), executing the methods of the underlying
		 * class only in certain conditions (e.g. only for logged in users) or
		 * modify what is returned to the caller.
		 *
		 * This option allows you to wrap local decorators
		 * ("\Aimeos\Admin\JQAdm\Customer\Decorator\*") around the JQAdm client.
		 *
		 *  admin/jqadm/customer/address/decorators/local = array( 'decorator2' )
		 *
		 * This would add the decorator named "decorator2" defined by
		 * "\Aimeos\Admin\JQAdm\Customer\Decorator\Decorator2" only to the JQAdm client.
		 *
		 * @param array List of decorator names
		 * @since 2016.01
		 * @category Developer
		 * @see admin/jqadm/common/decorators/default
		 * @see admin/jqadm/customer/address/decorators/excludes
		 * @see admin/jqadm/customer/address/decorators/global
		 */
		return $this->createSubClient( 'customer/address/' . $type, $name );
	}


	/**
	 * Returns the customer address for the given customer ID
	 *
	 * @param string $customerId Unique customer ID
	 * @return array Associative list of customer address IDs as keys and customer address items as values
	 */
	protected function getAddresses( $customerId )
	{
		$manager = \Aimeos\MShop\Factory::createManager( $this->getContext(), 'customer/address' );

		$search = $manager->createSearch();
		$search->setConditions( $search->compare( '==', 'customer.address.parentid', $customerId ) );
		$search->setSlice( 0, 0x7fffffff );

		return $manager->searchItems( $search );
	}


	/**
	 * Returns the list of sub-client names configured for the client.
	 *
	 * @return array List of JQAdm client names
	 */
	protected function getSubClientNames()
	{
		return $this->getContext()->getConfig()->get( $this->subPartPath, $this->subPartNames );
	}


	/**
	 * Creates new and updates existing items using the data array
	 *
	 * @param \Aimeos\MShop\Customer\Item\Iface $item Customer item object without referenced domain items
	 * @param string[] $data Data array
	 */
	protected function fromArray( \Aimeos\MShop\Customer\Item\Iface $item, array $data )
	{
		$manager = \Aimeos\MShop\Factory::createManager( $this->getContext(), 'customer/address' );

		$addresses = $this->getAddresses( $item->getId() );
		$ids = (array) $this->getValue( $data, 'customer.address.id', [] );

		foreach( $ids as $idx => $addrId )
		{
			if( isset( $addresses[$addrId] ) )
			{
				$addrItem = $addresses[$addrId];
				unset( $addresses[$addrId] );
			}
			else
			{
				$addrItem = $manager->createItem();
				$addrItem->setParentId( $item->getId() );
			}

			$addrItem->setSalutation( $this->getValue( $data, 'customer.address.salutation/' . $idx, '' ) );
			$addrItem->setCompany( $this->getValue( $data, 'customer.address.company/' . $idx, '' ) );
			$addrItem->setVatId( $this->getValue( $data, 'customer.address.vatid/' . $idx, '' ) );
			$addrItem->setTitle( $this->getValue( $data, 'customer.address.title/' . $idx, '' ) );
			$addrItem->setFirstname( $this->getValue( $data, 'customer.address.firstname/' . $idx, '' ) );
			$addrItem->setLastname( $this->getValue( $data, 'customer.address.lastname/' . $idx, '' ) );
			$addrItem->setAddress1( $this->getValue( $data, 'customer.address.address1/' . $idx, '' ) );
			$addrItem->setAddress2( $this->getValue( $data, 'customer.address.address2/' . $idx, '' ) );
			$addrItem->setAddress3( $this->getValue( $data, 'customer.address.address3/' . $idx, '' ) );
			$addrItem->setPostal( $this->getValue( $data, 'customer.address.postal/' . $idx, '' ) );
			$addrItem->setCity( $this->getValue( $data, 'customer.address.city/' . $idx, '' ) );
			$addrItem->setState( $this->getValue( $data, 'customer.address.state/' . $idx, '' ) );
			$addrItem->setLanguageId( $this->getValue( $data, 'customer.address.languageid/' . $idx, '' ) );
			$addrItem->setCountryId( $this->getValue( $data, 'customer.address.countryid/' . $idx, '' ) );
			$addrItem->setTelephone( $this->getValue( $data, 'customer.address.telephone/' . $idx, '' ) );
			$addrItem->setTelefax( $this->getValue( $data, 'customer.address.telefax/' . $idx, '' ) );
			$addrItem->setEmail( $this->getValue( $data, 'customer.address.email/' . $idx, '' ) );
			$addrItem->setWebsite( $this->getValue( $data, 'customer.address.website/' . $idx, '' ) );

			$manager->saveItem( $addrItem, false );
		}

		$manager->deleteItems( array_keys( $addresses ) );
	}


	/**
	 * Constructs the data array for the view from the given item
	 *
	 * @param \Aimeos\MShop\Customer\Item\Iface $item Customer item object including referenced domain items
	 * @param boolean $copy True if items should be copied, false if not
	 * @return string[] Multi-dimensional associative list of item data
	 */
	protected function toArray( \Aimeos\MShop\Customer\Item\Iface $item, $copy = false )
	{
		$siteId = $this->getContext()->getLocale()->getSiteId();
		$data = [];

		foreach( $item->getAddressItems() as $addrItem )
		{
			$list = $addrItem->toArray( true );

			if( $copy === true )
			{
				$list['customer.address.siteid'] = $siteId;
				$list['customer.address.id'] = '';
			}

			foreach( $list as $key => $value ) {
				$data[$key][] = $value;
			}
		}

		return $data;
	}


	/**
	 * Returns the rendered template including the view data
	 *
	 * @param \Aimeos\MW\View\Iface $view View object with data assigned
	 * @return string HTML output
	 */
	protected function render( \Aimeos\MW\View\Iface $view )
	{
		/** admin/jqadm/customer/address/template-item
		 * Relative path to the HTML body template of the address subpart for customers.
		 *
		 * The template file contains the HTML code and processing instructions
		 * to generate the result shown in the body of the frontend. The
		 * configuration string is the path to the template file relative
		 * to the templates directory (usually in admin/jqadm/templates).
		 *
		 * You can overwrite the template file configuration in extensions and
		 * provide alternative templates. These alternative templates should be
		 * named like the default one but with the string "default" replaced by
		 * an unique name. You may use the name of your project for this. If
		 * you've implemented an alternative client class as well, "default"
		 * should be replaced by the name of the new class.
		 *
		 * @param string Relative path to the template creating the HTML code
		 * @since 2016.04
		 * @category Developer
		 */
		$tplconf = 'admin/jqadm/customer/address/template-item';
		$default = 'customer/item-address-default.php';

		return $view->render( $view->config( $tplconf, $default ) );
	}
}
