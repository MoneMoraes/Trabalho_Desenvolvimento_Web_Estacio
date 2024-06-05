<?php
    include 'header.php';
    include 'carrinho.class.php';
    if(!isset($_GET['msg'])){
        // colocar mensagem de sucesso
    }    
?>



<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>New product</h4>
                </div>
            </div>
            
        </div>
        <div class="row property__gallery">






<!-- PRODUTO 1-------------------------------------------------------------------------------------------------------->
        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/eu.PNG">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="img/eu.PNG" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li>
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="1">
                                        <button class="trabalho">
                                                <span class="icon_bag_alt"> </span>
                                                </button>
                                    </form>
                                </a>
                            </li>                                                 
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Jaqueta de Couro Masculina Premium com Capuz Removível</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">R$360.9</div>
                    </div>
                </div>
            </div>
 <!-- PRODUTO 2----------------------------------------->

            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/a.png">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="img/a.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li>
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="2">
                                        <button class="trabalho">
                                                <span class="icon_bag_alt"> </span>
                                                </button>
                                    </form>
                                </a>
                            </li>                                                 
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Jaqueta de motociclista regular manga longa da poliuretana zíper</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">R$310.9</div>
                    </div>
                </div>
            </div>

<!-- PRODUTO 3----------------------------------------->
<div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="IMG/b.png">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="IMG/b.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li>
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="3">
                                        <button class="trabalho">
                                                <span class="icon_bag_alt"> </span>
                                                </button>
                                    </form>
                                </a>
                            </li>                                                 
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Botão Duplo Simples elegante Agasalhos</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">R$440.99</div>
                    </div>
                </div>
            </div>
<!-- PRODUTO 4----------------------------------------->
<div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="IMG/c.png">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="IMG/c.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li>
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="4">
                                        <button class="trabalho">
                                                <span class="icon_bag_alt"> </span>
                                                </button>
                                    </form>
                                </a>
                            </li>                                                 
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Casaco puffer cropped manga longo de poliéster simples</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">R$390.9</div>
                    </div>
                </div>
            </div>
<!-- PRODUTO 5----------------------------------------->
<div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="IMG/d.png">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="IMG/d.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li>
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="5">
                                        <button class="trabalho">
                                                <span class="icon_bag_alt"> </span>
                                                </button>
                                    </form>
                                </a>
                            </li>                                                 
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Terno Tradicional</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">$ 510.99</div>
                    </div>
                </div>
            </div>
<!-- PRODUTO 6----------------------------------------->

<div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="IMG/e.png">
                        <div class="label new">New</div>
                        <ul class="product__hover">
                            <li><a href="IMG/e.png" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li>
                                <a href="#">
                                    <form action="adicionar.php" method="post">
                                        <input type="hidden" name="cod" value="6">
                                        <button class="trabalho">
                                                <span class="icon_bag_alt"> </span>
                                                </button>
                                    </form>
                                </a>
                            </li>                                                 
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Blazer Masculino Slim 2 Botões Corte Italiano</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price">R$799.99</div>
                    </div>
                </div>
            </div>


<!-- PRODUTO FIM ----------------------------------------->



</div>
<?php
    include 'footer.php';

?>