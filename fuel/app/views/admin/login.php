    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .error {
      	color: #b94a48;
  		border-color: #b94a48;
      }

    </style>

<?php echo Form::open(array('class'=>'form-signin')); ?>
	
	<?php if (isset($_GET['destination'])): ?>
		<?php echo Form::hidden('destination',$_GET['destination']); ?>
	<?php endif; ?>

		<?php if (isset($login_error)): ?>
			<div class="error"><?php echo $login_error; ?></div>
		<?php endif; ?>
		<?php if ($val->error('email')): ?>
			<div class="error"><?php echo $val->error('email')->get_message(':label を入力してください'); ?></div>
		<?php endif; ?>
		<?php echo Form::input('email', Input::post('email'),array('class'=>'input-block-level','placeholder'=>'ログインID')); ?>
		

		<?php if ($val->error('password')): ?>
			<div class="error"><?php echo $val->error('password')->get_message(':label を入力してください'); ?></div>
		<?php endif; ?>
		<?php echo Form::password('password',null,array('class'=>'input-block-level','placeholder'=>'パスワード')); ?>
		
		<?php echo Form::submit(array('value'=>'ログイン', 'name'=>'submit','class'=>'btn btn-large btn-block btn-primary')); ?>


<?php echo Form::close(); ?>