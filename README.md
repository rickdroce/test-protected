# TestProtected
A little class that lets you handle the protected and private methods/properties of an object that you wish to run test on

Set private/protected property value <br />
`$obj = \TestProtected::setProtectedProperty( $obj, 'proprierty_name', 'value_set' );` <br />

Get private/protected property value <br />
`$value = \TestProtected::getProtectedProperty( $obj, 'proprierty_name' );` <br />

Invoke a private/protected method <br />
`$result = \TestProtected::invokeProtectedMethod( $obj, 'method_name', [ $arg_0, $arg_1 ] );` <br />
