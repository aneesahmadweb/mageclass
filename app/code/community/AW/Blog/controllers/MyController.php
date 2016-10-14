<?php

class AW_Blog_MyController extends Mage_Core_Controller_Front_Action
{

  public function preDispatch(){

      $this->loadLayout();
      echo $this->getLayout()->getBlock('root')->setTemplate('page/1column.phtml');
      $this->renderLayout();
      if(!Mage::helper('blog')->getEnabled()== '2'){
          Mage::getSingleton("core/session")->addError("Some error message");       }



        }

    public function IndexAction(){

        $this->loadLayout();
        echo Mage::helper('blog')->getEnabled();
        $this->renderLayout();


    }











}