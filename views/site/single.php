<?php
use yii\helpers\Url;
?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id])?>"> <?= $article->category->title?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view','id'=>$article->id])?>"><?= $article->title?></a></h1>

                        </header>
                        <div class="entry-content">
                            <?= $article->content?>
                        </div>
                       
                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By <?= $article->autor->name?> On <?= $article->getDate();?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-instagram" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>

             <?= $this->render('/partials/comment', [
                 'article'=>$article,
                 'comments'=>$comments,
                 'commentForm'=>$commentForm
             ])?>
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ]);?>
        </div>
    </div>
</div>
