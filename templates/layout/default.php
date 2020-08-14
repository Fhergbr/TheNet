<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $title ?? "TheNet"; ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;400&family=Passion+One:wght@400;700&display=swap" rel="stylesheet">
    <?= $this->Html->css(['styleAll']) ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="container header">
        <header>
            <div class="brand"><h1>The<span>Net</span></h1></div>
            <div class="nav-bar">
                <nav>
                    <ul class="nav-list">
                        <li><a href="">Home</a></li>
                        <li><a href="">Política</a></li>
                        <li><a href="">Emprego</a></li>
                        <li><a href="">Educação</a></li>
                        <li><a href="">Saúde</a></li>
                        <li><a href="">Cidadania</a></li>
                        <li><a href="">Polícia</a></li>
                        <li><a href="">Economia</a></li>
                        <li><a href="">Obituário</a></li>
                    </ul>
                </nav>
                <div class="ham">
                    <div class="bar"></div>
                </div>
            </div>
        </header>
    </div>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
    <?=$this->Html->script(['app']) ?>
</body>
</html>
