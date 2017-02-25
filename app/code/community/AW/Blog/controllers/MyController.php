<?php

class AW_Blog_MyController extends Mage_Core_Controller_Front_Action
{

  public function preDispatch(){


      if(!Mage::helper('blog')->getEnabled()== '2'){
          Mage::getSingleton("core/session")->addError("Some error message");       }



        }

    public function IndexAction(){

        $this->loadLayout();
        echo Mage::helper('blog')->getEnabled();
        $this->getLayout()->getBlock('root')->setTemplate('page/3columns.phtml');
        $this->renderLayout();


    }

    public function finedAction(){

         $this->loadLayout();
        $this->getLayout()->getBlock('root')->setTemplate('page/1column.phtml');
        echo Mage::helper('blog')->getEnabled();
        echo Mage::helper('blog')->isShowcolor();
         $this->renderLayout();
    }
    //asdfsaf











}