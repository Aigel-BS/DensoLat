<?php
    $this->assign('title', 'Denso Autopartes México - Noticias DENSO');
    $this->assign('description', 'Conoce las últimas noticias de DENSO en México y el mundo. Podrás conocer más acerca del mundo de las autopartes, así como de las actualizaciones de productos, premios, e información técnica.');
?>

<div class=" bd-stretchtobottom-2 bd-stretch-to-bottom" data-control-selector=".bd-content-12">
    <div class=" bd-content-12 ">
        <div class=" bd-htmlcontent-3 bd-margins" data-page-id="page.17">
            <section class=" bd-section-3 bd-tagstyles" id="section7" data-section-title="Container Plus Image Below">
                <div class="bd-container-inner bd-margins clearfix">
                    <p style="font-family:'Barlow Bold'" class=" bd-textblock-74 bd-content-element">
                        NOTICIAS
                    </p>
                    <h1 style="font-family:'Denso'" class=" bd-textblock-72 bd-content-element">
                       NOTICIAS DENSO
                    </h1>
                </div>
            </section>
            <section class=" bd-section-20 bd-tagstyles" id="section20" data-section-title="Section">
                <div class="bd-container-inner bd-margins clearfix">
                    <div class="row" style="margin-top:2em">
                        <h2 style="font-family:'Denso'; color:red;font-size:36px"><?= $blog['Blog']['titulo']?></h2>
						<div class="col-lg-12" style="text-align: left">
							<?= $this->Html->image($blog['Blog']['imagen'],array('style'=>'width:100%'))?>
							<div style="background-color:#f2f2f2;padding: 2em;">
								<p><small><i>Publicado: <?= date("d/m/Y",strtotime($blog['Blog']['fecha_creacion']))?></i></small></p>
								<?= $blog['Blog']['contenido']?>
							</div>
                        </div>
                    </div>
                </div>
            </section>
</div>
</div></div>
