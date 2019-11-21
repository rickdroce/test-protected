# TestProtected
A little class that lets you handle the protected and private methods/properties of an object that you wish to run test on

##### Set private/protected property value

```php
$obj = \TestProtected::setProtectedProperty( $obj, 'proprierty_name', 'value_set' );
```

##### Get private/protected property value

```php
$value = \TestProtected::getProtectedProperty( $obj, 'proprierty_name' );
```

##### Invoke a private/protected method 

```php
$result = \TestProtected::invokeProtectedMethod( $obj, 'method_name', [ $arg_0, $arg_1 ] );
```
