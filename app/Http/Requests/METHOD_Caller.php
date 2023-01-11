<?php

namespace App\Http\Requests;

class METHOD_Caller
{ 
	/**
	* $class is the class where the method you will be calling is located.
	*/
	public $class;
	/**
	* $method is the name of the method you want to call that exists inside of $class.
	*/
	public $method;
	/**
	* $requestClass is the type of Request. You can use custom requests 
	* and don't have to use Illuminate\Http\Request.
	*/
	public $requestClass;
	/**
	* $data is the data you are passing into the method. It should be an array with indexes
	* and values. No CSRF token is required.
	*/
	public $data;
	/**
	* $requestSending is the actual request object you will be sending. You will attach the data to this.
	*/
	public $requestSending;
 
	public function __construct($class, $method, $requestClass, $data)
	{
	  //assign parameter values to class object
	  $this->class = $class;
	  $this->method = $method;
	  $this->requestClass = $requestClass;
	  $this->data = $data;

	  //instantiate the request object and replace the data.
	  $this->requestSending = new $this->requestClass();
	  $this->requestSending->replace($this->data);
	}

    public function call()
    {
        $response = app($this->class)->{$this->method}($this->requestClass::createFromBase($this->requestSending));
        return $response;
    }

    public function formatted($response)
    {
		return (json_decode(json_encode($response),true)['original']);    	
    }
}