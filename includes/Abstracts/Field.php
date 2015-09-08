<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Abstracts_Field
 */
abstract class NF_Abstracts_Field
{
    /**
    * @var string
    */
    protected $_name  = '';

    /**
     * @var string
     */
    protected $_nicename = '';

    /**
    * @var string
    */
    protected $_group = '';

    /**
    * @var array
    */
    protected $_settings = array();

    /**
    * @var string
    */
    protected $_test_value = '';

    /**
     * @var string
     */
    protected $_attr = '';

    /**
     * @var string
     */
     protected $_template ='';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_nicename = __( $this->_nicename, Ninja_Forms::TEXTDOMAIN );

        $this->_settings = Ninja_Forms::config( 'FieldSettings' );
    }

    /*
    * PUBLIC METHODS
    */

    /**
     * Validate a user (or system) defined value.
     *
     * @param $value
     * @return bool
     */
    public function validate( $value )
    {
        if ( isset( $this->_attr['required'] ) AND TRUE == $this->_attr['required'] AND ! $value ) return FALSE;
    }

}