<?php

/**
 * Class TestProtected
 *
 * This class lets us access protected/private methods and properties of our classes under test
 */
class TestProtected {

	/**
	 * Lets us access a protected property

	 * @param $obj
	 * @param $property_name
	 *
	 * @return ReflectionProperty
	 * @throws ReflectionException
	 */
	protected static function accessProperty( $obj, $property_name ) {
		$reflection          = new ReflectionClass( $obj );
		$reflection_property = $reflection->getProperty( $property_name );
		$reflection_property->setAccessible( true );

		return $reflection_property;
	}

	/**
	 * Sets a protected property and returns the object
	 *
	 * @param $obj
	 * @param $property_name
	 * @param $value
	 *
	 * @return object $obj
	 * @throws ReflectionException
	 */
	public static function setProtectedProperty( $obj, $property_name, $value ) {
		$reflection_property = self::accessProperty( $obj, $property_name );
		
		$reflection_property->setValue( $obj, $value );

		return $obj;
	}

	/**
	 * Returns a protected property's value
	 *
	 * @param $obj
	 * @param $property_name
	 *
	 * @return mixed
	 * @throws ReflectionException
	 */
	public static function getProtectedProperty( $obj, $property_name ) {
		$reflection_property = self::accessProperty( $obj, $property_name );

		return $reflection_property->getValue( $obj );
	}

	/**
	 * Gets a protected method
	 *
	 * @param $obj
	 * @param $method_name
	 *
	 * @return ReflectionMethod
	 * @throws ReflectionException
	 */
	protected static function getProtectedMethod( $obj, $method_name ) {
		$reflection = new ReflectionClass( $obj );
		$method = $reflection->getMethod( $method_name );
		$method->setAccessible( true );
		
		return $method;
	}

	/**
	 * Invokes the method with given args, behaves like the real method
	 *
	 * @param $obj
	 * @param $method_name
	 * @param array $args
	 *
	 * @return mixed
	 * @throws ReflectionException
	 */
	public static function invokeProtectedMethod( $obj, $method_name, array $args = [] ) {
		$method = self::getProtectedMethod( $obj, $method_name );
		
		return $method->invokeArgs( $obj, $args );
	}

}