<?php
/**
 * Subject Class
 *
 * Handles Subjects
 *
 * @class       @subject
 * @version     1.0.0
 * @package     YATTA/Classes/Subject
 * @category    Class
 * @author      undisclosed
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Yatta_Subject {
    
	/**
	 * Constructor
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->hooks();
	}

	/**
	 * Hooks
	 * @since 1.0.0
	 */
	public function hooks(){
        
       add_action('init', array($this, 'register_subject_taxonomy') );

       add_action('cmb2_admin_init', array($this, 'register_subject_taxonomy_fields') );

       add_filter('manage_edit-subject_columns', array($this, 'add_subject_columns'));       

       add_filter('manage_subject_custom_column', array($this, 'add_subject_column_content'), 10, 3);
       
       add_action('admin_footer-edit-tags.php', array( $this, 'remove_subject_form_fields' ) );
       
	}
    
	/**
	 * Register subject taxonomy
	 * @since 1.0.0
	 */
	public function register_subject_taxonomy(){

    }
    
	/**
	 * Register taxonomy fields
	 * @since 1.0.0
	 */    
	public function register_subject_taxonomy_fields(){

    }    
    
    /**
	 * Customize taxonomy list - set column labels and order
	 * @since 1.0.0
	 */    
    function add_subject_columns($columns){
        
    }
     
    /**
	 * Customize taxonomy list - set column values
	 * @since 1.0.0
	 */    
    function add_subject_column_content($content, $column_name, $term_id){

    }    

    /**
	 * Remove taxonomy metaboxes
	 * @since 1.0.0
	 */
	public function remove_subject_form_fields(){

	}   

    
}
?>
