<?php

App::uses('FormHelper', 'View/Helper');

class BFormHelper extends FormHelper {


    public $form_options = array(
        'role'          =>  'form',
        'class'         =>  'form-vertical',
        'inputDefaults' =>  array(
            'format'        =>  array(
                'before',
                'label',
                'between',
                'input',
                'error',
                'after'
            ),
            'class' => 'form-control',
            'div'           =>  array('class' =>  'form-group'),
            'label'         =>  array('class' =>  'control-label'),
            'error'         =>  array(
                'attributes' =>  array(
                    'wrap' => 'span',
                    'class' =>  'alert alert-danger help-inline'
                )
            ),
        ),
        'data-toggle'  => 'validator',
    );

	public function create($model = null, $options = array()) {

        if ( empty($options) ) {
            $options = $this->form_options;
        }

		return parent::create($model, $options);
	}


}
