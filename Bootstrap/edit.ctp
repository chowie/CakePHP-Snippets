<?php
/***
 * Adding form and input options that make FormHelper friendly to Bootstrap
 */
?>
<div class="Controller form">
    <div class="col-lg-7">
    <div class="panel panel-default">
        <div class="panel-heading">
            <nav class="nav nav-pills">
              <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>
                        <li class="divider"></li>
                        <li><?php echo $this->Form->postLink(
                            __('Delete'),
                            array(
                                'action' => 'delete',
                                $this->Form->value('Model.id')
                            ),
                            array(),
                            __('Are you sure you want to delete # %s?', $this->Form->value('Model.id')
                            )
                        );
                        ?></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="panel-body">
            <?php
            $form_options = array(
                'role'          =>  'form',
                'class'         =>  'form-vertical',
                'inputDefaults' =>  array(
                    'format' =>  array(
                        'before',
                        'label',
                        'between',
                        'input',
                        'error',
                        'after'
                    ),
                    'class' =>  'form-control',
                    'div'   =>  array('class'   =>  'control-group'),
                    'label' =>  array('class'   =>  'control-label'),
                    'error' =>  array(
                        'attributes' =>  array(
                            'wrap'  =>  'span',
                            'class' =>  'alert alert-danger help-inline'
                        )
                    ),
                ),
                'data-toggle'  => 'validator',
            );
            echo $this->Form->create('Model', $form_options);
        ?>
            <fieldset>
            <?php
                echo $this->Form->input('example', array('between' => '<div class="controls">', 'after' => '</div>'));

                $options = array(
                    'type'  =>  'submit',
                    'id'    =>  'btn-submit',
                    'class' =>  'btn btn-default',
                    'style' =>  'margin-top: 10px'
                );
            ?>
    <?php echo $this->Form->button('Save', $options ); ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>
