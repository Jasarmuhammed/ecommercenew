<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'text', 'cookie']);
    }

    public function index() {
        // Setting a cookie
        $cookie = array(
            'name'   => 'example_cookie',
            'value'  => 'This is a sample cookie',
            'expire' => '3600',
        );
        set_cookie($cookie);

        // Getting a cookie
        $data['cookie_value'] = get_cookie('example_cookie');

        // Formatting text
        $data['formatted_text'] = word_limiter('This is an example of a long text that will be shortened.', 5);

        // Creating a link
        $data['link'] = anchor('welcome/another_page', 'Click Here');

        $this->load->view('welcome', $data);
    }

    public function another_page() {
        echo "You have reached another page!";
    }
}
