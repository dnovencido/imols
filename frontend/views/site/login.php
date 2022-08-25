<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block logo-bg">
                            <div class="ntc-logo-container">
                                <div>
                                    <?= Html::img(['@web/img/ntc-logo.png'], ['width' => '100%']);?>
                                    <p>Information Management and Online Licensing System</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login to your account</h1>
                                </div>
                                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'password')->passwordInput() ?>

                                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                                <div class="my-1 mx-0" style="color:#999;">
                                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                                    <br>
                                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                                </div>

                                <div class="form-group">
                                    <?= Html::submitButton('Login', ['class' => 'mt-3 btn btn-success btn-block', 'name' => 'login-button']) ?>
                                </div>

                                <?php ActiveForm::end(); ?>   
                                
                                <hr>

                                <div class="register-account my-1 mx-0" style="color:#999;">
                                    If you dont have existing account yet you can
                                    <?= Html::a('Register an account', ['signup'], ) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
