<?php namespace LasseRafn\CvrApi\Utils;

class Model
{
	function __construct( $data = [] )
	{
		foreach($data as $item => $value)
		{
			if ( ! method_exists( $this, 'set' . ucfirst( camel_case( $item ) ) . 'Attribute' ) )
			{
				$this->setAttribute( $item, $value );
			}
			else
			{
				$this->setAttribute( $item, $this->{'set' . ucfirst( camel_case( $item ) ) . 'Attribute'}( $value ) );
			}
		}
	}

	protected function setAttribute( $attribute, $value )
	{
		$this->{$attribute} = $value;
	}
}