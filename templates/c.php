<?php
    /** This is the controller file, all your php back end logic should be performed here **/
    class __PAGE_NAME_REPLACEMENT___Controller
    {
        public $template = '__PAGE_NAME_REPLACEMENT__';

        /**
         * This is the default function that will be called by router.php
         * 
         * @param array $getVars the GET variables posted to index.php array urlVars hold all the bits of the url
         *  the address http://www.mydomain.com/arg1/arg2, arg1 will denote the page and 
         *  arg 2 will be the function to be called if you dont want to call the main function
         */
        public function main(array $urlVars, array $getVars)
        {
            $model = new __PAGE_NAME_REPLACEMENT___Model;
            $view = new View_Model($this->template);
            //This is code to show how you can access and pass variable
            $view->passVars('urlVars', $urlVars);
            $view->passVars('getVars', $getVars);
        }

        /** This is a sample function toshow how to make a second function in th model
            use URL http://mydomain.com/__PAGE_NAME_REPLACEMENT__/other to execute tis function instead of the main function **/
        public function other(array $urlVars, array $getVars){
            $model = new __PAGE_NAME_REPLACEMENT___Model;
            $view = new View_Model($this->template);
            
            $view->passVars('stuff', 'Some data here !');
            $view->passVars('urlVars', $urlVars);
            $view->passVars('getVars', $getVars);
        }
    }

?>