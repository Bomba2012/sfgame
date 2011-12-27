<?php

/**
 * Base project form.
 * 
 * @package    sfgame
 * @subpackage form
 * @author     Your name here 
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class ThrowForm extends BaseForm
{

    public function configure()
    {
        $this->setWidgets(array(
            'throw' => new sfWidgetFormInput(),
        ));

        $this->setDefault('throw', 1);
    }

}
