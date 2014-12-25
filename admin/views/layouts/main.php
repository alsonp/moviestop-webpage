<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->

            <div id="">
                <?php
                if (Yii::app()->user->isGuest):
                    $this->widget(
                            'booster.widgets.TbNavbar', array(
                        'type' => null, // null or 'inverse'
                        'brand' => CHtml::encode(Yii::app()->name),
                        'brandUrl' => '#',
                        'collapse' => true, // requires bootstrap-responsive.css
                        'fixed' => false,
                        'fluid' => true,
                        'items' => array(
                            array(
                                'class' => 'booster.widgets.TbMenu',
                                'type' => 'navbar',
                                'items' => array(
                                    array('label' => 'Login', 'url' => array('site/login'), 'active' => true),
                                ),
                            ),
                        ),
                            )
                    );
                else:
                    $this->widget(
                            'booster.widgets.TbNavbar', array(
                        'type' => null, // null or 'inverse'
                        'brand' => 'Dashboard',
                        'brandUrl' => '#',
                        'collapse' => true, // requires bootstrap-responsive.css
                        'fixed' => false,
                        'fluid' => true,
                        'items' => array(
                            array(
                                'class' => 'booster.widgets.TbMenu',
                                'type' => 'navbar',
                                'items' => array(
                                    array('label' => 'Home', 'url' => array("site/index")),
                                    array('label' => 'Movies', 'url' => array('movie/admin')),
                                    array('label' => 'Theatre', 'url' => array('theatre/admin')),
                                    array('label' => 'Category', 'url' => array('category/admin')),
                                    array('label' => 'Users', 'url' => array('users/admin')),
                                    array('label' => 'Time', 'url' => array('time/admin')),
                                    array('label' => 'Hall', 'url' => array('hall/admin')),
                                ),
                            ),
                            array(
                                'class' => 'booster.widgets.TbMenu',
                                'type' => 'navbar',
                                'htmlOptions' => array('class' => 'pull-right'),
                                'items' => array(
                                    array(
                                        'label' => 'Action',
                                        'url' => '#',
                                        'items' => array(
                                            array('label' => 'Logout', 'url' => array('site/logout')),
                                        )
                                    ),
                                ),
                            ),
                        ),
                            )
                    );

                endif;
                ?>


            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> Movie Stop Nepal.<br/>
                All Rights Reserved.<br/>
                
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
